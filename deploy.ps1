# Set TLS 1.2
[System.Net.ServicePointManager]::SecurityProtocol = [System.Net.SecurityProtocolType]::Tls12

$ftpHost = "ftp://pro117.dnspro.com.br"
$ftpUser = "maisyo09"
$ftpPass = "6ryt3rvYVIbP2ntj"

# Get the directory where this script is located
$scriptPath = $PSScriptRoot
if (-not $scriptPath) { $scriptPath = Get-Location }

Write-Host "Base Directory: $scriptPath"

$remotePath = "/public_html" 

# Create FTP WebRequest
$webclient = New-Object System.Net.WebClient
$webclient.Credentials = New-Object System.Net.NetworkCredential($ftpUser, $ftpPass)

# Function to upload a file
function Upload-File($localFile, $remoteFile) {
    $uri = New-Object System.Uri($remoteFile)
    Write-Host "Uploading $localFile to $remoteFile..."
    try {
        $webclient.UploadFile($uri, $localFile)
    } catch {
        Write-Host "Error uploading $localFile : $_"
    }
}

# Function to create a directory
function Create-Directory($remoteDir) {
    $uri = New-Object System.Uri($remoteDir)
    try {
        $makeDirectory = [System.Net.WebRequest]::Create($uri)
        $makeDirectory.Credentials = New-Object System.Net.NetworkCredential($ftpUser, $ftpPass)
        $makeDirectory.Method = [System.Net.WebRequestMethods+Ftp]::MakeDirectory
        $null = $makeDirectory.GetResponse()
        Write-Host "Created directory: $remoteDir"
    } catch {
         # Ignore if exists
    }
}

# Upload index.html
$indexFile = Join-Path $scriptPath "index.html"
if (Test-Path $indexFile) {
    Upload-File $indexFile "$ftpHost$remotePath/index.html"
} else {
    Write-Host "Error: index.html not found at $indexFile"
}

# Upload images folder (recursively)
$imagesDir = Join-Path $scriptPath "images"
$remoteImagesDir = "$ftpHost$remotePath/images"

if (Test-Path $imagesDir) {
    Create-Directory $remoteImagesDir
    
    Get-ChildItem -Path $imagesDir -Recurse -File | ForEach-Object {
        # Calculate relative path
        $relativePath = $_.FullName.Substring($imagesDir.Length)
        $remoteFilePath = "$remoteImagesDir$relativePath".Replace("\", "/")
        Upload-File $_.FullName $remoteFilePath
    }
} else {
    Write-Host "Warning: Images directory not found at $imagesDir"
}

Write-Host "Deployment completed!"
