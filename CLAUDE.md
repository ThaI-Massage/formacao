# Contexto e Instruções para o Claude Code

Este repositório contém a landing page de vendas e o painel/hub da **Formação Completa em Thai Massage** (Prof. Arnoldo Benkenstein).

## 📌 Links e Produção
- **URL de Produção:** `https://formacaocompleta.massagemthai.com.br/`
- **Hospedagem:** Cloudflare Pages (Projeto `formacao`)
- **Repositório Git:** `https://github.com/ThaI-Massage/formacao.git`
- **Branch de Produção:** `main`

## 📁 Estrutura de Arquivos Principal
- `index.html`: Página principal de vendas (Site Porta / Landing Page).
- `hubjr/index.html`: Portal/Hub / Painel de Administração e Acesso de Alunos.
- `images/`: Imagens e mídias do site (módulos, depoimentos, certificados).
- `deploy.ps1` e `deploy_fixed.ps1`: Scripts legados de deploy FTP.

## 🚀 Workflow de Deploy
Toda alteração efetuada nos arquivos deve ser commitada e enviada via git na branch `main`. O Cloudflare Pages compila e atualiza o site automaticamente em 30-60 segundos.

```powershell
git add .
git commit -m "Descricao das alteracoes"
git push origin main
```

## 📝 Regras de Negócio Importantes
1. **Plano Master ("Divulgação como terapeuta indicado")**:
   - A divulgação do aluno como terapeuta recomendado pelo professor Arnoldo Benkenstein **está condicionada à performance do aluno e à avaliação técnica do professor**.
   - No `index.html`, o item no card do Plano Master e a seção de FAQ registram explicitamente essa exigência.

2. **Links de Pagamento Kiwify**:
   - Acesso Anual (R$ 197 / 12x R$ 20,37): `https://pay.kiwify.com.br/mxIXLJn`
   - Acesso Vitalício (R$ 297 / 12x R$ 30,72): `https://pay.kiwify.com.br/9sUYGo2`
   - Plano Master (R$ 497 / 12x R$ 51,40): `https://pay.kiwify.com.br/itgl74b`
