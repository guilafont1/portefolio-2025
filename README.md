# Portfolio Symfony 7 - Julien FONT

Portfolio professionnel développé avec Symfony 7, sans base de données, optimisé pour la performance et l'hébergement gratuit.

## 📋 Table des matières

- [Présentation du projet](#présentation-du-projet)
- [Technologies utilisées](#technologies-utilisées)
- [Architecture du projet](#architecture-du-projet)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Structure des données](#structure-des-données)
- [Services Symfony](#services-symfony)
- [Pages du site](#pages-du-site)
- [Personnalisation](#personnalisation)
- [Déploiement](#déploiement)
- [FAQ](#faq)

## 🎯 Présentation du projet

Ce portfolio est un site web statique développé avec **Symfony 7** qui présente le profil professionnel de **Julien FONT**, Développeur Fullstack en alternance chez KOOREO.

### Caractéristiques principales

- ✅ **100% statique côté données** : Aucune base de données, toutes les données sont stockées dans des fichiers PHP
- ✅ **Performance optimale** : Chargement rapide grâce à l'absence de requêtes BDD
- ✅ **Hébergement gratuit** : Compatible avec Netlify, Vercel, GitHub Pages, Render, Railway
- ✅ **Design moderne** : Interface responsive avec Bootstrap 5 et animations CSS
- ✅ **Symfony 7** : Utilisation de la dernière version de Symfony
- ✅ **Docker ready** : Configuration Docker complète pour le développement

## 🛠 Technologies utilisées

### Backend
- **Symfony 7.0** : Framework PHP
- **PHP 8.2+** : Langage de programmation
- **Twig** : Moteur de templates

### Frontend
- **Bootstrap 5.3** : Framework CSS
- **Bootstrap Icons** : Bibliothèque d'icônes
- **JavaScript** : Interactivité et animations
- **Google Fonts (Inter)** : Typographie moderne

### DevOps
- **Docker** : Containerisation
- **Composer** : Gestionnaire de dépendances PHP
- **Git** : Contrôle de version

## 📁 Architecture du projet

```
portefolio-2025/
├── config/                 # Configuration Symfony
│   ├── packages/          # Configuration des bundles
│   │   ├── framework.yaml
│   │   ├── twig.yaml
│   │   ├── mailer.yaml
│   │   └── validator.yaml
│   ├── routes.yaml        # Routes de l'application
│   └── services.yaml      # Configuration des services
│
├── docker/                 # Configuration Docker
│   ├── nginx.conf         # Configuration Nginx
│   └── supervisord.conf   # Configuration Supervisor
│
├── public/                 # Point d'entrée public
│   └── index.php          # Front controller
│
├── src/                    # Code source de l'application
│   ├── Controller/        # Contrôleurs
│   │   ├── HomeController.php
│   │   ├── ProjectController.php
│   │   └── ContactController.php
│   ├── Data/              # Fichiers de données PHP
│   │   ├── projects.php
│   │   ├── experiences.php
│   │   ├── skills.php
│   │   └── education.php
│   ├── Service/           # Services Symfony
│   │   ├── ProjectService.php
│   │   ├── ExperienceService.php
│   │   ├── SkillService.php
│   │   └── EducationService.php
│   └── Kernel.php         # Kernel Symfony
│
├── templates/              # Templates Twig
│   ├── base.html.twig     # Template de base
│   ├── emails/            # Templates d'emails
│   │   └── contact.html.twig
│   ├── home/              # Pages d'accueil
│   │   └── index.html.twig
│   ├── project/           # Pages projets
│   │   ├── index.html.twig
│   │   └── show.html.twig
│   └── contact/           # Page contact
│       └── index.html.twig
│
├── var/                    # Fichiers temporaires (cache, logs)
│
├── vendor/                 # Dépendances Composer
│
├── .env                    # Variables d'environnement
├── .gitignore             # Fichiers ignorés par Git
├── composer.json          # Dépendances PHP
├── Dockerfile             # Image Docker
├── docker-compose.yml     # Configuration Docker Compose
└── README.md              # Ce fichier
```

## 🚀 Installation

### Prérequis

- PHP 8.2 ou supérieur
- Composer
- (Optionnel) Docker et Docker Compose

### Installation avec Composer

1. **Cloner le projet** (ou télécharger les fichiers)

```bash
git clone <url-du-repo>
cd portefolio-2025
```

2. **Installer les dépendances**

```bash
composer install
```

3. **Configurer les variables d'environnement**

Créez un fichier `.env.local` (optionnel, le `.env` par défaut fonctionne) :

```bash
cp .env .env.local
```

Éditez `.env.local` et configurez :

```env
APP_ENV=dev
APP_SECRET=votre-secret-key-unique
MAILER_DSN=smtp://user:pass@smtp.example.com:587
MAILER_FROM=noreply@votredomaine.com
MAILER_TO=votre-email@example.com
```

4. **Vérifier les permissions**

```bash
mkdir -p var/cache var/log
chmod -R 777 var
```

### Installation avec Docker

1. **Construire et lancer les conteneurs**

```bash
docker-compose up -d --build
```

Le site sera accessible sur `http://localhost:8000`

2. **Voir les logs**

```bash
docker-compose logs -f
```

3. **Arrêter les conteneurs**

```bash
docker-compose down
```

## 💻 Utilisation

### Lancer le serveur de développement Symfony

```bash
symfony server:start
```

Ou avec PHP intégré :

```bash
php -S localhost:8000 -t public
```

Le site sera accessible sur `http://localhost:8000`

### Commandes utiles

**Vider le cache :**
```bash
php bin/console cache:clear
```

**Voir les routes :**
```bash
php bin/console debug:router
```

**Voir les services :**
```bash
php bin/console debug:container
```

## 📊 Structure des données

Toutes les données sont stockées dans des fichiers PHP dans le dossier `src/Data/`. Ces fichiers retournent des tableaux PHP simples.

### `projects.php`

Structure d'un projet :

```php
[
    'slug' => 'identifiant-unique',
    'title' => 'Titre du projet',
    'description' => 'Description courte',
    'long_description' => 'Description détaillée',
    'technologies' => ['Symfony', 'PHP', 'Docker'],
    'image' => '/images/projects/image.jpg',
    'date' => '2024-11',
    'status' => 'En cours', // ou 'Terminé'
    'link' => 'https://example.com', // ou null
    'github' => 'https://github.com/user/repo', // ou null
    'features' => [
        'Fonctionnalité 1',
        'Fonctionnalité 2',
    ]
]
```

### `experiences.php`

Structure d'une expérience :

```php
[
    'id' => 1,
    'title' => 'Titre du poste',
    'company' => 'Nom de l\'entreprise',
    'location' => 'Ville',
    'type' => 'Alternance', // Stage, Emploi, etc.
    'start_date' => '2024-11',
    'end_date' => null, // ou '2024-12'
    'current' => true, // ou false
    'description' => 'Description de l\'expérience',
    'missions' => [
        [
            'title' => 'Titre de la mission',
            'details' => [
                'Détail 1',
                'Détail 2',
            ]
        ]
    ],
    'technologies' => ['Symfony', 'PHP'],
    'products' => ['Produit 1', 'Produit 2'] // ou []
]
```

### `skills.php`

Structure des compétences :

```php
[
    'backend' => [
        'name' => 'Backend',
        'icon' => 'server', // Nom de l'icône Bootstrap Icons
        'skills' => [
            ['name' => 'Symfony', 'level' => 'expert'], // expert, advanced, intermediate, beginner
            ['name' => 'Laravel', 'level' => 'advanced'],
        ]
    ],
    // ... autres catégories
]
```

### `education.php`

Structure d'une formation :

```php
[
    'id' => 1,
    'degree' => 'Nom du diplôme',
    'rncp' => 'RNCP35584 – Niveau 7',
    'school' => 'Nom de l\'école',
    'location' => 'Ville',
    'type' => 'Alternance',
    'company' => 'Nom de l\'entreprise',
    'start_date' => '2024',
    'end_date' => null,
    'current' => true,
    'description' => 'Description de la formation',
    'subjects' => [
        'Matière 1',
        'Matière 2',
    ]
]
```

## 🔧 Services Symfony

Les services sont automatiquement injectés dans les contrôleurs grâce à l'autowiring de Symfony.

### `ProjectService`

Service pour gérer les projets.

**Méthodes :**
- `getAll()` : Retourne tous les projets
- `getBySlug(string $slug)` : Retourne un projet par son slug
- `getLatest(int $limit = 3)` : Retourne les projets les plus récents

**Utilisation :**
```php
public function __construct(
    private ProjectService $projectService
) {}

$projects = $this->projectService->getAll();
```

### `ExperienceService`

Service pour gérer les expériences.

**Méthodes :**
- `getAll()` : Retourne toutes les expériences (triées par date)
- `getById(int $id)` : Retourne une expérience par son ID
- `getCurrent()` : Retourne les expériences en cours

### `SkillService`

Service pour gérer les compétences.

**Méthodes :**
- `getAll()` : Retourne toutes les compétences par catégorie
- `getByCategory(string $category)` : Retourne une catégorie de compétences
- `getAllCategories()` : Retourne toutes les catégories

### `EducationService`

Service pour gérer les formations.

**Méthodes :**
- `getAll()` : Retourne toutes les formations (triées par date)
- `getCurrent()` : Retourne les formations en cours

## 📄 Pages du site

### Page d'accueil (`/`)

- **Route** : `home`
- **Contrôleur** : `HomeController::index`
- **Template** : `templates/home/index.html.twig`

**Sections :**
- Hero avec présentation
- À propos (profil détaillé)
- Compétences (par catégories)
- Expériences (timeline complète)
- Projets récents (3 derniers)

### Liste des projets (`/projets`)

- **Route** : `projects`
- **Contrôleur** : `ProjectController::index`
- **Template** : `templates/project/index.html.twig`

Affiche tous les projets sous forme de cartes.

### Détail d'un projet (`/projets/{slug}`)

- **Route** : `project_detail`
- **Contrôleur** : `ProjectController::show`
- **Template** : `templates/project/show.html.twig`

Affiche les détails complets d'un projet.

### Contact (`/contact`)

- **Route** : `contact`
- **Contrôleur** : `ContactController::index`
- **Template** : `templates/contact/index.html.twig`

Formulaire de contact avec validation Symfony et envoi d'email.

## 🎨 Personnalisation

### Modifier les données

#### Ajouter un projet

Éditez `src/Data/projects.php` et ajoutez un nouvel élément au tableau :

```php
[
    'slug' => 'mon-nouveau-projet',
    'title' => 'Mon Nouveau Projet',
    // ... autres champs
]
```

#### Ajouter une expérience

Éditez `src/Data/experiences.php` et ajoutez un nouvel élément au tableau.

#### Modifier les compétences

Éditez `src/Data/skills.php` et modifiez les tableaux de compétences.

### Personnaliser le thème

#### Couleurs

Modifiez les variables CSS dans `templates/base.html.twig` :

```css
:root {
    --primary-color: #6366f1;    /* Couleur principale */
    --secondary-color: #8b5cf6;   /* Couleur secondaire */
    --dark-color: #1e293b;        /* Couleur du texte */
    --light-color: #f8fafc;       /* Couleur de fond clair */
}
```

#### Typographie

Modifiez la police Google Fonts dans `templates/base.html.twig` :

```html
<link href="https://fonts.googleapis.com/css2?family=VotrePolice:wght@300;400;500;600;700&display=swap" rel="stylesheet">
```

Puis changez dans le CSS :

```css
body {
    font-family: 'VotrePolice', sans-serif;
}
```

#### Modifier le header/footer

Éditez `templates/base.html.twig` et modifiez les sections `<nav>` et `<footer>`.

### Ajouter une nouvelle page

1. **Créer le contrôleur** dans `src/Controller/` :

```php
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MaPageController extends AbstractController
{
    #[Route('/ma-page', name: 'ma_page')]
    public function index(): Response
    {
        return $this->render('ma_page/index.html.twig');
    }
}
```

2. **Créer le template** dans `templates/ma_page/index.html.twig` :

```twig
{% extends 'base.html.twig' %}

{% block title %}Ma Page{% endblock %}

{% block body %}
    <section>
        <div class="container">
            <h1>Ma Page</h1>
        </div>
    </section>
{% endblock %}
```

3. **Ajouter la route** dans `config/routes.yaml` (optionnel si vous utilisez les attributs) :

```yaml
ma_page:
    path: /ma-page
    controller: App\Controller\MaPageController::index
```

## 🚢 Déploiement

### Render

1. **Créer un compte** sur [Render](https://render.com)

2. **Créer un nouveau service Web**

3. **Configuration :**
   - **Build Command** : `composer install --no-dev --optimize-autoloader`
   - **Start Command** : `php -S 0.0.0.0:$PORT -t public`
   - **Environment** : PHP

4. **Variables d'environnement :**
   ```
   APP_ENV=prod
   APP_SECRET=votre-secret-key
   MAILER_DSN=votre-dsn-mailer
   ```

### Railway

1. **Créer un compte** sur [Railway](https://railway.app)

2. **Connecter votre repository GitHub**

3. **Créer un fichier `railway.json`** :

```json
{
  "$schema": "https://railway.app/railway.schema.json",
  "build": {
    "builder": "NIXPACKS"
  },
  "deploy": {
    "startCommand": "php -S 0.0.0.0:$PORT -t public",
    "restartPolicyType": "ON_FAILURE",
    "restartPolicyMaxRetries": 10
  }
}
```

4. **Variables d'environnement** : Configurer dans le dashboard Railway

### GitHub Pages (Build statique)

Pour GitHub Pages, vous devez générer une version statique du site.

1. **Installer Symfony CLI** :

```bash
symfony local:server:export
```

2. **Utiliser un outil de build statique** comme [Symfony Static Dumper](https://github.com/symfony/static-dumper) ou générer les pages manuellement.

### OVH / VPS

1. **Connectez-vous en SSH** à votre serveur

2. **Installez PHP 8.2+ et Composer**

3. **Clonez le projet** :

```bash
git clone <url-du-repo> /var/www/portfolio
cd /var/www/portfolio
```

4. **Installez les dépendances** :

```bash
composer install --no-dev --optimize-autoloader
```

5. **Configurez Nginx** :

```nginx
server {
    listen 80;
    server_name votre-domaine.com;
    root /var/www/portfolio/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ ^/index\.php(/|$) {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
    }
}
```

6. **Configurez les permissions** :

```bash
chown -R www-data:www-data /var/www/portfolio
chmod -R 755 /var/www/portfolio
```

7. **Configurez les variables d'environnement** dans `.env.local`

### Netlify / Vercel

Ces plateformes nécessitent une version statique. Utilisez un build statique ou un service comme [Symfony Static Dumper](https://github.com/symfony/static-dumper).

## 🔒 Sécurité & Optimisation

### Sécurité

1. **APP_SECRET** : Changez la valeur par défaut dans `.env`
2. **Validation des formulaires** : Tous les formulaires sont validés côté serveur
3. **Protection CSRF** : Activée par défaut dans Symfony
4. **Headers de sécurité** : Ajoutez des headers HTTP dans votre serveur web

### Optimisation

1. **Cache Symfony** : Le cache est automatiquement optimisé en production
2. **Autoloader optimisé** : Utilisez `composer install --optimize-autoloader` en production
3. **Minification CSS/JS** : Utilisez des outils comme Webpack Encore (optionnel)
4. **CDN** : Utilisez un CDN pour Bootstrap et les autres assets

## ❓ FAQ

### Comment ajouter un projet ?

Éditez `src/Data/projects.php` et ajoutez un nouvel élément au tableau. Le projet apparaîtra automatiquement sur la page `/projets`.

### Comment ajouter une expérience ?

Éditez `src/Data/experiences.php` et ajoutez un nouvel élément au tableau. L'expérience apparaîtra automatiquement dans la timeline sur la page d'accueil.

### Comment modifier les compétences ?

Éditez `src/Data/skills.php` et modifiez les tableaux. Les compétences sont organisées par catégories.

### Comment changer les couleurs du site ?

Modifiez les variables CSS dans `templates/base.html.twig` dans la section `<style>`.

### Comment configurer l'envoi d'emails ?

1. Configurez `MAILER_DSN` dans `.env.local` :
   ```
   MAILER_DSN=smtp://user:pass@smtp.example.com:587
   ```

2. Configurez les adresses email :
   ```
   MAILER_FROM=noreply@votredomaine.com
   MAILER_TO=votre-email@example.com
   ```

### Le site ne charge pas, que faire ?

1. Vérifiez que PHP 8.2+ est installé : `php -v`
2. Videz le cache : `php bin/console cache:clear`
3. Vérifiez les permissions : `chmod -R 777 var`
4. Vérifiez les logs : `tail -f var/log/dev.log`

### Comment ajouter une nouvelle section sur la page d'accueil ?

1. Modifiez `templates/home/index.html.twig`
2. Ajoutez votre section HTML
3. Si nécessaire, passez des données depuis `HomeController::index`

### Comment personnaliser le footer ?

Éditez la section `<footer>` dans `templates/base.html.twig` et modifiez les liens sociaux.

### Le formulaire de contact ne fonctionne pas

1. Vérifiez la configuration `MAILER_DSN` dans `.env.local`
2. Vérifiez que le serveur SMTP est accessible
3. Consultez les logs : `tail -f var/log/dev.log`

### Comment déployer sur un hébergeur gratuit ?

Voir la section [Déploiement](#déploiement) ci-dessus. Render et Railway sont les plus simples pour Symfony.

## 📝 Licence

Ce projet est sous licence MIT. Vous êtes libre de l'utiliser, le modifier et le distribuer.

## 👤 Auteur

**Julien FONT**
- Développeur Fullstack
- Master Informatique & Systèmes d'Information (RNCP35584 – Niveau 7)
- EPSI Lyon — Alternance chez KOOREO

## 🤝 Contribution

Ce projet est un portfolio personnel. Pour toute question ou suggestion, n'hésitez pas à ouvrir une issue.

---

**Dernière mise à jour** : 2024
