# Iniciar git flow
```shell
 git flow init
```

Será feita uma pergunta para saber qual **branch** vai receber as **releases**.

Nesse caso iremos escolher a `main`.
```
Which branch should be used for bringing forth production releases?
- develop
- main
  Branch name for production releases: [main]
```

Aqui devemos escolher a **branch** `develop`.
```
Which branch should be used for integration of the "next release"?
- main
  Branch name for "next release" development: [] develop
```

Nas próximas perguntas deixaremos tudo como padrão.
```
How to name your supporting branch prefixes?
Feature branches? [feature/]
Bugfix branches? [bugfix/]
Release branches? [release/]
Hotfix branches? [hotfix/]
Support branches? [support/]
Version tag prefix? []
Hooks and filters directory? [/home/user/PhpstormProjects/pesquisa-cep/.git/hooks]
```

# Iniciando o processo de release

Para iniciar o processo de release precisamos ter nossa **branch** de `develop` atualizada.
```shell
git flow release start v0.0.1
```

Após iniciado o processo da release iremos fazer o **push** para o repositório.
```shell
git push origin release/v0.0.1
```

No GitHub iremos abrir um **pull request** da **branch** `release/v0.0.1` para `main`

**Obs:** Se necessário aguarde a aprovação do **pull request**, mas não feche o **pull request** diretamente pelo GitHub.

# Finalizando o processo de release

Agora iremos finalizar a **release** que fará o **merge** da **branch** `release/v0.0.1`
```shell
git flow release finish -k
```

- Primeiro arquivo iremos fechar `Ctrl + x`
- Segundo arquivo iremos colocar a versão da release `v0.0.1`, salvar `Ctrl + s` e fechar `Ctrl + x`
- Terceiro aquivo iremos fechar `Ctrl + x`

E por fim iremos finalizar
```shell
git push origin main --follow-tags
```

# Criação da release no GitHub

Entrar no link [https://github.com/user/repository/releases/new](https://github.com/leandrohago/pesquisa-cep/releases/new)

Aqui você já escolhe a **tag** gerada para sua release e um título para sua release.

Vou deixar aqui um **template** para padronizar as **releases**.
```md
### Added

### Changed

### Removed

### Fixed
```

Com a **release** escrita só falta clicar em `public release` e estará tudo pronto.
