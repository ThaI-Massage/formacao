import os
from PIL import Image

def optimize_image(input_path, output_path, max_width=None):
    try:
        with Image.open(input_path) as img:
            if max_width and img.width > max_width:
                ratio = max_width / img.width
                new_height = int(img.height * ratio)
                img = img.resize((max_width, new_height), Image.Resampling.LANCZOS)
            
            img.save(output_path, 'WEBP', quality=85)
            print(f"Successfully converted {input_path} to {output_path}")
    except Exception as e:
        print(f"Error converting {input_path}: {e}")

base_dir = r"c:/JOB/CURSO THAI BACKUP/DIVULGAÇÃO/PÁGINA DE VENDAS/FORMAÇÃO COMPLETA THAI MASSAGE/images"

# Image 1 (Large PNG)
input1 = os.path.join(base_dir, "thai_massage_497.png")
output1 = os.path.join(base_dir, "thai_massage_497.webp")
optimize_image(input1, output1, max_width=800)

# Image 2 (JPG)
input2 = os.path.join(base_dir, "thai_massage_788.jpg")
output2 = os.path.join(base_dir, "thai_massage_788.webp")
optimize_image(input2, output2)
