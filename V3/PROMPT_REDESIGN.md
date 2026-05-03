# PROMPT: Redesign Completo — Landing Page "Formação Completa em Thai Massage"

## OBJETIVO

Crie uma página de vendas (landing page) completa em um único arquivo `index.html` com **design totalmente novo**, moderno e premium. A página deve usar **Tailwind CSS via CDN**, **Google Fonts**, e **Font Awesome**. Deve ser responsiva (mobile-first), ter microanimações, e seguir princípios de direct-response marketing / alta conversão.

**IMPORTANTE:** Mantenha EXATAMENTE o mesmo conteúdo textual, os mesmos caminhos de imagem, os mesmos links e a mesma estrutura de seções listados abaixo. O que deve mudar é **apenas o design visual** (paleta de cores, tipografia, espaçamentos, layout, efeitos, animações).

As imagens estão na pasta `images/` relativa ao `index.html`. Use caminhos relativos como `images/nome_do_arquivo.webp`.

---

## REQUISITOS TÉCNICOS

- **Arquivo único:** `index.html` (HTML + CSS inline/embeded + JS inline)
- **Tailwind CSS:** via `<script src="https://cdn.tailwindcss.com"></script>`
- **Font Awesome 6.5.1:** via CDN (load assíncrono com fallback noscript)
- **Google Fonts:** Escolha 2 fontes que combinem (serif para headings, sans-serif para body). NÃO use Playfair Display + Lato (design atual) nem Cormorant Garamond + Inter (design v2).
- **Responsivo:** Mobile-first, breakpoints sm/md/lg/xl
- **Performance:** Preload da imagem hero, lazy loading nas demais, `decoding="async"`, width/height explícitos
- **Accessibility:** `aria-label` em botões de rede social, alt text em imagens, contraste adequado
- **SEO:** meta description, og tags, título descritivo
- **Paleta de cores:** Escolha uma paleta COMPLETAMENTE DIFERENTE do design atual (que usa stone/gold) e do v2 (que usa charcoal/copper). Sugira algo sofisticado e elegante.

---

## META PIXEL (copiar exatamente)

```html
<script>
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return; n = f.fbq = function () {
            n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
        n.queue = []; t = b.createElement(e); t.async = !0;
        t.src = v; s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '915022613519555');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=915022613519555&ev=PageView&noscript=1" /></noscript>
```

---

## FAVICON

```
images/thai_masssage_favicon.png
```

---

## LINKS IMPORTANTES

| Destino | URL |
|---------|-----|
| **Checkout (CTA principal)** | `https://pay.kiwify.com.br/mxIXLJn` |
| **WhatsApp** | `https://wa.me/5551956990906?text=Gostaria%20de%20aprender%20Thai%20Massagem%20com%20o%20Professor%20Arnoldo%20Benkenstein` |
| **Instagram** | `https://www.instagram.com/thai.massage.br` |
| **Facebook** | `https://www.facebook.com/thaimassagebr/` |
| **YouTube** | `https://www.youtube.com/@thaimassagebr/videos` |
| **TikTok** | `https://www.tiktok.com/@thaimassagebr` |
| **Vídeo depoimentos (YouTube embed)** | `https://www.youtube-nocookie.com/embed/iufNsa8hscg` |
| **Thumbnail do vídeo** | `https://img.youtube.com/vi/iufNsa8hscg/maxresdefault.jpg` |
| **Logo Kiwify** | `https://kiwify.com.br/.netlify/images?url=_astro%2Flogo.0cuMVBav.png&w=400&h=110` |

---

## ESTRUTURA DAS SEÇÕES (ordem obrigatória)

### 1. BARRA DE URGÊNCIA (fixo no topo, z-index alto)

- Texto: "Oferta por tempo limitado: Garanta sua vaga com desconto especial!"
- Ícone de relógio animado (pulse)

### 2. HEADER FIXO

- Logo: `images/dharma_wheel_logo.svg` (40-48px, arredondado)
- Nome: "Arnoldo Benkentein Massage" (destaque na palavra "Massage")
- Nav links (desktop): O Professor (#sobre) | Conteúdo (#conteudo) | Depoimentos (#depoimentos) | Oferta (#oferta) | FAQ (#faq)
- Botão CTA: "INSCREVA-SE" → link checkout
- Header deve encolher ao scroll

### 3. HERO (full-screen)

- **Imagem de fundo:** `images/thai_massage_hero_parte%20superior_da%20_pagina.webp` (fetchpriority="high")
- **Badge:** "Formação Online Completa"
- **Headline:** "Domine a Massagem Premium que Valoriza sua Hora e Encanta seus Clientes"
- **Sub-headline:** "Do Básico ao Avançado: O método Arnoldo Benkenstein para você se tornar a maior referência em massagem de alto valor na sua região."
- **Imagem do professor (mobile only):** mesma imagem hero em card arredondado
- **CTA principal:** "Quero Fazer Parte" → link checkout (com animação pulse)
- **3 Stat Badges:**
  - +400 Manobras (ícone: fa-hand-sparkles)
  - +6 Horas Videoaulas (ícone: fa-play-circle)
  - Suporte Direto c/ Professor (ícone: fa-headset)
- **Trust Bar:**
  - Avatares: `images/thai_massage_grazy_grings.webp` e `images/thai_massage_gabriel_passsos.webp`
  - Texto: "★★★★★ +1.200 terapeutas formados"
  - Badge: "7 Dias de Garantia Incondicional" (ícone fa-shield-alt)
- **Desktop: Imagem do professor em frame à direita** com 2 cards flutuantes:
  - Card 1: "O curso mais completo do Brasil" / "VÁRIOS CURSOS EM UM SÓ"
  - Card 2: Citação: "Não é esforço, é suavidade e fluidez." — Arnoldo Benkenstein

### 4. PROBLEMA / AGITAÇÃO (fundo escuro)

- Subtítulo: "Você Se Identifica?"
- Título: "Os Desafios Que Travam o Seu Crescimento"
- 4 cards com ícone ✗ vermelho:
  1. **Repertório Limitado** — "Aplica sempre as mesmas manobras sem conseguir diferenciar seus atendimentos."
  2. **Insegurança Profissional** — "Sente medo de errar e prejudicar o paciente por falta de uma base estruturada."
  3. **Baixo Faturamento** — "Compete por preço e não consegue cobrar o valor que seu trabalho realmente merece."
  4. **Desgaste Físico** — "Técnicas incorretas causam dores e lesões, encurtando sua jornada profissional."
- Rodapé: "Se você marcou **pelo menos um** desses itens, a **Formação Completa em Thai Massage** foi criada para você."

### 5. SOLUÇÃO (fundo claro)

- Subtítulo: "A Solução Definitiva"
- Título: "Formação Completa em Thai Massage: Do Básico ao Avançado"
- Descrição: "Um método passo a passo que transforma iniciantes em terapeutas completos e profissionais experientes em especialistas requisitados."
- 4 cards com ícones:
  1. **Metodologia Estruturada** (fa-book-open) — "Do fundamento teórico à prática avançada, cada aula foi desenhada para construir confiança progressiva."
  2. **+400 Manobras Detalhadas** (fa-hands) — "Repertório vasto que garante atendimentos únicos e personalizados para cada tipo de cliente."
  3. **Ergonomia & Longevidade** (fa-user-shield) — "Aprenda a usar alavancas corporais corretas, protegendo seu corpo e prolongando sua carreira."
  4. **Valorização Profissional** (fa-dollar-sign) — "Certificação reconhecida que permite cobrar mais e atrair clientes que valorizam qualidade."

### 6. VERSATILIDADE — 3 Formas de Atendimento (fundo escuro)

- Subtítulo: "Liberdade Profissional"
- Título: "Domine as 3 Formas de Atendimento"
- Descrição: "Não fique limitado. O Método Arnoldo Benkenstein prepara você para atuar em **qualquer cenário**, com ou sem estrutura."

#### Card 1 — No Solo (Tatame)

- Badge: "Tradicional"
- Imagem: `images/thai_massage_57.webp`
- Ícone: fa-layer-group
- Texto: "A forma mais pura e tradicional da Thai Massage. Use o peso do corpo para manobras profundas e precisas com total ergonomia."
- Vantagens: "Maior amplitude de movimento" | "Zero custo com equipamentos caros"

#### Card 2 — Na Maca

- Badge: "Adaptado"
- Imagem: `images/thai_massage_789.webp`
- Ícone: fa-bed
- Texto: "Adaptação inteligente para clínicas e spas. Mantenha a eficácia das manobras na maca sem sobrecarregar suas costas."
- Vantagens: "Ideal para Spas e Clínicas" | "Diferencial no mercado convencional"

#### Card 3 — Na Cadeira (Quick)

- Badge: "Corporativo"
- Imagem: `images/thai_massage_73.webp`
- Ícone: fa-chair
- Texto: "Ideal para o mercado corporativo. Atendimentos rápidos (15-20 min) de alto retorno e porta de entrada para novos clientes."
- Vantagens: "Alta rotatividade de clientes" | "Portabilidade total"

- CTA: "Ver grade curricular completa" → #conteudo

### 7. SOBRE O PROFESSOR (fundo escuro)

- Subtítulo: "Seu Mentor"
- Título: "Professor Arnoldo Benkenstein"
- Foto: `images/thai_massage_sobre_o_professor.webp`
- Bio parágrafo 1: "Com mais de **17 anos de experiência** dedicados à Thai Massage, o Professor Arnoldo Benkenstein é referência nacional na arte da massagem tailandesa. Formado diretamente na **Tailândia** pelas mais renomadas escolas tradicionais, ele trouxe ao Brasil a essência autêntica dessa terapia milenar."
- Bio parágrafo 2: "Ao longo de sua trajetória, já formou mais de **1.200 terapeutas** que hoje atuam com excelência em clínicas, spas e consultórios por todo o país. Sua metodologia única combina a tradição tailandesa com uma didática moderna e acessível."
- 3 Stats: 17+ Anos de Experiência | 1.200+ Terapeutas Formados | 7.000+ Horas de Atendimento

### 8. CONTEÚDO PROGRAMÁTICO (fundo claro)

- Subtítulo: "O Que Você Vai Aprender"
- Título: "Conteúdo Programático Completo"
- Descrição: 'Mais de **6 horas de videoaulas** e **400+ manobras detalhadas**.'
- 7 módulos em grid (cada um com imagem, título e descrição):

| Módulo | Imagem | Título | Descrição |
|--------|--------|--------|-----------|
| 1 | `images/thai_massage_teoria.webp` | Teoria e Linhas Sen | Fundamentos teóricos da Thai Massage, anatomia energética e estudo aprofundado das linhas Sen. |
| 2 | `images/thai_massage_Protocolo%20.webp` | Protocolo Completo de Atendimento | Aprenda o protocolo completo do início ao fim para realizar atendimentos profissionais com segurança. |
| 3 | `images/thai_massage_Alongamento%20.webp` | Alongamento Tailandês: Lanna Thai | Técnicas ancestrais de alongamento da tradição Lanna para flexibilidade e alívio profundo. |
| 4 | `images/thai_massage_maca.webp` | Atendimento na Maca | Adaptação completa da Thai Massage para atendimentos na maca, ampliando sua versatilidade. |
| 5 | `images/thai_massage_Quick%20.webp` | Quick Thai Massage | Atendimento rápido na cadeira de massagem — ideal para eventos corporativos e empresas. |
| 6 | `images/thai_massage_Pha%20_Khao_Maa.webp` | Pha Khao Maa — Tecido Tailandês | Massagem e alongamento com o tradicional tecido tailandês para resultados terapêuticos únicos. |
| 7 | `images/thai_massage_herbal.webp` | Thai Herbal Massage | Massagem com compressas de ervas tailandesas — técnica premium e altamente valorizada no mercado. |

- CTA: "QUERO ACESSO A TODOS OS MÓDULOS" → link checkout

### 9. DEPOIMENTOS

- Subtítulo: "Histórias Reais"
- Título: "O Que Nossos Alunos Dizem"
- **Marquee/Carousel contínuo** com 4 depoimentos (duplicados para loop seamless):

| Aluno | Profissão | Foto | Depoimento |
|-------|-----------|------|------------|
| Grazi Grings | Massoterapeuta | `images/thai_massage_grazy_grings.webp` | "A formação do Professor Arnoldo mudou completamente meu atendimento. Hoje tenho uma lista de espera de clientes e cobro 3x mais do que antes. O conteúdo é riquíssimo!" |
| Gabriel Passo | Artista Marcial | `images/thai_massage_gabriel_passsos.webp` | "Como lutador, sempre busquei formas de recuperação muscular. A Thai Massage se tornou minha ferramenta principal. O curso é extremamente didático e completo." |
| Marcelo Bender | Vendedor | `images/thai_massage_marcelo_bender.webp` | "Mesmo sem experiência anterior, consegui aprender do zero. Hoje faço atendimentos nos finais de semana e já tenho uma renda extra significativa. Recomendo demais!" |
| Robson R. | Massoterapeuta | `images/thai_massage_robson_r.webp` | "Já fiz diversos cursos online, mas nenhum chega perto da qualidade desta formação. As apostilas são um material de consulta incrível no dia a dia." |

- Todos com ★★★★★

- **Vídeo de depoimentos:**
  - Título: "Veja o Depoimento dos Alunos"
  - Thumbnail clicável que abre modal com iframe YouTube
  - URL embed: `https://www.youtube-nocookie.com/embed/iufNsa8hscg?autoplay=1`
  - Thumbnail: `https://img.youtube.com/vi/iufNsa8hscg/maxresdefault.jpg`

### 10. CERTIFICADO (fundo escuro)

- Subtítulo: "Reconhecimento"
- Título: "Certificado de Conclusão"
- Descrição: "Ao concluir a formação, você recebe um certificado digital que comprova sua qualificação em Thai Massage."
- Imagem principal: `images/THAI_MASSAGE_certificado.webp`
- 2 fotos menores: `images/thai_massage_788.jpg` | `images/thai_massage_497.png`
- Nota: "O certificado é válido para fins acadêmicos, fiscais e profissionais."

### 11. OFERTA / PRICING (fundo claro)

- Subtítulo: "Oferta Especial"
- Título: "Invista na Sua Transformação Profissional"
- Card de preço com header gradiente:
  - "Acesso Anual Completo"
  - "12x de **R$ 20,37**" (preço grande e em destaque)
  - "ou **R$ 197** à vista"
  - "Renovação anual por apenas **R$ 97**"
- **Inclui:**
  - 7 Módulos Completos (+6h de vídeo)
  - +400 Manobras Detalhadas
  - +10 Apostilas para Impressão
  - Certificado de Conclusão
- **Bônus Exclusivos:**
  1. Feedback Direto do Professor — "Envie vídeos pela plataforma e receba correções personalizadas do Prof. Arnoldo."
  2. Descontos em Cursos Presenciais — "Acesso a preços exclusivos para workshops e formações presenciais."
  3. 2 Mentorias Semanais Online — "Encontros ao vivo com o Professor para tirar dúvidas e aprofundar técnicas."
- **Garantia 7 dias:** "Se dentro de 7 dias você sentir que o curso não é para você, devolvemos 100% do seu investimento. Sem perguntas, sem burocracia."
- Selo "Pagamento processado por" + logo Kiwify
- CTA: "GARANTIR MINHA VAGA AGORA" → link checkout
- Métodos de pagamento: Cartão | 2 Cartões | PIX | PIX + Boleto

### 12. FAQ

- Subtítulo: "Tire Suas Dúvidas"
- Título: "Perguntas Frequentes"
- 5 perguntas com acordeão (toggle):

| Pergunta | Resposta |
|----------|----------|
| Preciso ter experiência prévia em massagem? | Não! A formação foi desenhada do básico ao avançado. Começamos pelos fundamentos teóricos e progredimos gradualmente. Mesmo que você nunca tenha feito uma massagem, conseguirá acompanhar e aprender com confiança. |
| Por quanto tempo terei acesso ao conteúdo? | O acesso é anual (12 meses) a partir da data da compra. Após esse período, você pode renovar por apenas R$ 97 — menos da metade do valor original — e continuar acessando todas as atualizações. |
| O certificado é reconhecido no mercado? | Sim! O certificado é emitido pelo Professor Arnoldo Benkenstein, referência nacional em Thai Massage com mais de 17 anos de experiência e 1.200+ terapeutas formados. É amplamente reconhecido em clínicas, spas e consultórios. |
| Posso assistir as aulas no celular? | Com certeza! A plataforma Kiwify é 100% responsiva. Você pode assistir no celular, tablet ou computador, quando e onde quiser, no seu próprio ritmo. |
| E se eu não gostar do curso? | Você tem 7 dias de garantia incondicional. Se por qualquer motivo sentir que o curso não atende às suas expectativas, basta solicitar o reembolso pela Kiwify e receberá 100% do valor de volta. Sem perguntas. |

- CTA: "COMEÇAR AGORA MESMO" → link checkout

### 13. CTA FINAL (fundo escuro)

- Título: "Sua Jornada de Transformação Começa Agora"
- Texto: "Não espere mais para se tornar o terapeuta que seus clientes merecem. Junte-se a mais de 1.200 profissionais formados pelo Professor Arnoldo."
- CTA: "QUERO ME INSCREVER AGORA" → link checkout
- Info: "12x de R$ 20,37 | Garantia de 7 dias | Acesso imediato"

### 14. FOOTER (fundo muito escuro)

- Nome: "Arnoldo Benkentein Massage"
- Subtexto: "Formação Completa em Thai Massage"
- Redes sociais: Instagram, Facebook, YouTube, TikTok, WhatsApp (com links listados acima)
- Copyright: "© 2026 Thai Massage BR — Todos os direitos reservados. Prof. Arnoldo Benkenstein."

### 15. ELEMENTOS FLUTUANTES

#### Botão WhatsApp (canto inferior direito)

- Fundo verde #25D366, ícone fa-whatsapp
- Animação pulse verde
- Link WhatsApp

#### Sticky CTA (centro inferior, aparece após scroll > 600px)

- "COMEÇAR AGORA MESMO" → link checkout
- Aparece com transição suave
- Animação pulse

---

## FUNCIONALIDADES JAVASCRIPT

1. **FAQ Accordion:** toggle open/close com rotação do ícone chevron
2. **Header shrink:** reduzir padding ao scrollar > 80px
3. **Scroll animations:** fade-in-up nos cards ao entrar no viewport (IntersectionObserver)
4. **Marquee speed control:** ao mover mouse sobre marquee, alterar velocidade (desktop only, `pointer: fine`)
5. **Sticky CTA:** mostrar/esconder baseado no scroll
6. **Video modal:** abrir/fechar modal do YouTube ao clicar na thumbnail

---

## OTIMIZAÇÕES DE PERFORMANCE

- `@media (prefers-reduced-motion: reduce)` — desabilitar animações
- `@media (max-width: 768px)` — desabilitar hover effects e float animations
- `@media (max-width: 1024px)` — remover backdrop-filter do header
- `will-change: transform` no marquee
- `contain: content` no marquee
- Font Awesome com `media="print" onload="this.media='all'"` + fallback noscript

---

## OG TAGS

```html
<meta property="og:type" content="website">
<meta property="og:title" content="Formação Completa em Thai Massage — Prof. Arnoldo Benkenstein">
<meta property="og:description" content="Domine a arte milenar da Thai Massage com mais de 6h de videoaulas, 400+ manobras e certificado.">
<meta property="og:image" content="images/thai_massage_58.webp">
<meta property="og:url" content="https://thaimassage.br">
```

---

## NOTAS DE DESIGN

- Crie um design que pareça premium, sofisticado e profissional
- Use gradientes sutis, sombras suaves, bordas arredondadas generosas
- Microanimações nos botões CTA (pulse, hover lift, shadow expansion)
- Seções alternando entre fundos claros e escuros para ritmo visual
- Cards com efeito hover (lift + shadow)
- Imagens com hover zoom sutil
- A paleta deve transmitir: confiança, sofisticação, bem-estar e exclusividade
- NÃO use as paletas anteriores (stone+gold nem charcoal+copper)
