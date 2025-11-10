Sistema de Preferência de Tema (Claro/Escuro)
Um exemplo prático de sistema de preferências de tema usando cookies para persistir a escolha do usuário entre sessões.

📁 Estrutura do Projeto

tema-com-cookies/

│

├── index.php          ← Página principal que exibe o tema atual

├── set_tema.php       ← Processa a mudança de tema e define o cookie

└── style.css          ← Estilos para os temas claro e escuro
🎯 Objetivo
Demonstrar como usar cookies para salvar preferências do usuário (tema claro/escuro) e aplicar automaticamente nas visitas subsequentes.

✨ Funcionalidades
Seleção de Tema: Botões para alternar entre tema claro e escuro

Persistência: Cookie salva a preferência por 30 dias

Aplicação Automática: Tema carregado automaticamente nas próximas visitas

Interface Intuitiva: Design simples e fácil de usar

🛠️ Tecnologias Utilizadas
PHP - Backend e gerenciamento de cookies

HTML5 - Estrutura da página

CSS3 - Estilização e temas

Cookies HTTP - Armazenamento da preferência

🎨 Temas Disponíveis
🌞 Tema Claro
Fundo: #f0f0f0

Texto: #222

Ideal para uso diurno ou em ambientes claros

🌙 Tema Escuro
Fundo: #222

Texto: #f0f0f0

Ideal para uso noturno ou para reduzir fadiga visual

📋 Como Usar
Acesse a página principal (index.php)

Visualize o tema atual exibido no topo da página

Clique em um dos temas para aplicar:

"🌞 Tema Claro" - Ativa o modo claro

"🌙 Tema Escuro" - Ativa o modo escuro

Feche e reabra o navegador para ver a persistência do tema

🔧 Configuração Técnica
Cookie Configurado
Nome: tema

Duração: 30 dias

Escopos: Aplicado ao domínio atual

Valores possíveis: claro ou escuro

Arquivos Principais
index.php
Detecta o tema salvo no cookie

Aplica a classe CSS correspondente no body

Exibe o tema atual e botões de seleção

set_tema.php
Recebe o parâmetro tema via GET

Define o cookie com a preferência

Redireciona de volta para a página principal

style.css
Define estilos específicos para cada tema

Estiliza os botões de seleção

Mantém design responsivo e limpo

🌐 Compatibilidade

✅ Todos os navegadores modernos

✅ Dispositivos móveis

✅ Funciona com JavaScript desabilitado

🔒 Considerações de Privacidade
O cookie armazena apenas a preferência de tema

Não coleta dados pessoais

Pode ser excluído a qualquer tempo pelas configurações do navegador

🎯 Casos de Uso
Sites com modo escuro/claro

Preferências de acessibilidade

Configurações de usuário persistentes

Sistemas de personalização de interface

