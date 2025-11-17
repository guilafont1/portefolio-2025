# 🚀 Guide de démarrage rapide

## Installation en 3 étapes

### 1. Installer les dépendances

```bash
composer install
```

### 2. Configurer l'environnement (optionnel)

Créez un fichier `.env.local` :

```env
APP_ENV=dev
APP_SECRET=votre-secret-key-unique
MAILER_DSN=smtp://user:pass@smtp.example.com:587
MAILER_FROM=noreply@votredomaine.com
MAILER_TO=votre-email@example.com
```

### 3. Lancer le serveur

```bash
symfony server:start
```

Ou avec PHP intégré :

```bash
php -S localhost:8000 -t public
```

Le site sera accessible sur **http://localhost:8000**

## 🐳 Avec Docker

```bash
docker-compose up -d --build
```

Le site sera accessible sur **http://localhost:8000**

## 📝 Modifier les données

- **Projets** : `src/Data/projects.php`
- **Expériences** : `src/Data/experiences.php`
- **Compétences** : `src/Data/skills.php`
- **Formations** : `src/Data/education.php`

## 🎨 Personnaliser le design

Modifiez les variables CSS dans `templates/base.html.twig` :

```css
:root {
    --primary-color: #6366f1;
    --secondary-color: #8b5cf6;
    --dark-color: #1e293b;
    --light-color: #f8fafc;
}
```

## 📚 Documentation complète

Consultez le [README.md](README.md) pour la documentation complète.

