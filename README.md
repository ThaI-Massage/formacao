# Formação Completa em Thai Massage

Landing page de vendas da Formação Completa em Thai Massage do Prof. Arnoldo Benkenstein.

## 🌐 Produção

- **URL pública:** https://formacaocompleta.massagemthai.com.br/
- **Hospedagem:** Cloudflare Pages
- **Projeto Pages:** [formacao](https://dash.cloudflare.com/dff9aace655c968aac7735644f805acb/workers/pages/view/formacao)
- **Branch de produção:** `main`

## 🚀 Como atualizar a landing

1. Edite `index.html` localmente (ou imagens em `images/`)
2. `git add` os arquivos modificados
3. `git commit -m "descrição do que mudou"`
4. `git push origin main`
5. Cloudflare Pages auto-deploya em ~30-60s
6. Verifique em https://formacaocompleta.massagemthai.com.br/ (`Ctrl+Shift+R` pra forçar refresh)

## 🔄 Roteamento (importante)

```
formacaocompleta.massagemthai.com.br
    ↓ (DNS Worker route)
Cloudflare Worker "formacao" (proxy)
    ↓
formacao-c9u.pages.dev (Cloudflare Pages)
    ↓
GitHub: ThaI-Massage/formacao (branch main)
```

O Worker "formacao" foi reduzido a um proxy simples que encaminha pro Pages.
Não edite o Worker — toda mudança vem por commit no `main`.

## 📁 Estrutura

- `index.html` — landing page principal
- `images/` — todas as imagens (hero, certificado, depoimentos, módulos)
- `.gitignore` — arquivos ignorados (backups, scripts antigos)

## 💳 Links de pagamento (Kiwify)

- **Acesso Anual** (R$ 197 ou 12x R$ 20,37): `pay.kiwify.com.br/mxIXLJn`
- **Acesso Vitalício** (R$ 297 ou 12x R$ 30,72): `pay.kiwify.com.br/9sUYGo2`

## 🛠️ Workflow recomendado pra mudanças grandes

Pra mudanças que mereçam revisão antes de ir ao ar:

```bash
git checkout -b nova-feature      # cria branch
# edita arquivos
git commit -am "mudança X"
git push origin nova-feature       # Pages gera preview URL automaticamente
# revisa preview em <hash>.formacao-c9u.pages.dev
# se OK:
git checkout main
git merge nova-feature
git push origin main               # auto-deploy produção
```

Pra mudanças pequenas (ajuste de copy, link, imagem), commit direto em `main` está OK — Cloudflare Pages versiona tudo e dá pra reverter qualquer deploy em 1 clique.
