# 🚀 Maintenir le serveur Render actif (plan gratuit)

Sur le plan gratuit de Render, les services s'endorment après **15 minutes d'inactivité**. Voici plusieurs solutions pour maintenir votre serveur actif.

## ✅ Solution 1 : Routes de ping créées

J'ai créé deux routes simples que vous pouvez utiliser :

- **`/health`** : Retourne un JSON avec le statut
- **`/ping`** : Retourne simplement "pong"

Ces routes sont légères et ne consomment pas de ressources.

## 🔧 Solution 2 : UptimeRobot (Recommandé - Gratuit)

**UptimeRobot** est un service gratuit qui ping votre site toutes les 5 minutes.

### Configuration :

1. **Créer un compte** sur [UptimeRobot](https://uptimerobot.com/) (gratuit jusqu'à 50 monitors)

2. **Ajouter un nouveau monitor** :
   - **Monitor Type** : HTTP(s)
   - **Friendly Name** : Portfolio Julien Font
   - **URL** : `https://votre-app.onrender.com/health` (ou `/ping`)
   - **Monitoring Interval** : 5 minutes (gratuit)
   - **Alert Contacts** : Votre email (optionnel)

3. **Sauvegarder** → Le service ping automatiquement toutes les 5 minutes

✅ **Avantages** :
- Gratuit
- Fiable
- Monitoring en temps réel
- Alertes en cas de problème

---

## 🔧 Solution 3 : cron-job.org (Gratuit)

Service de cron jobs en ligne qui peut faire des requêtes HTTP.

### Configuration :

1. **Créer un compte** sur [cron-job.org](https://cron-job.org/) (gratuit)

2. **Créer un nouveau cron job** :
   - **Title** : Keep Render Alive
   - **Address** : `https://votre-app.onrender.com/health`
   - **Schedule** : Toutes les 10 minutes (`*/10 * * * *`)
   - **Request Method** : GET

3. **Sauvegarder** → Le job s'exécute automatiquement

✅ **Avantages** :
- Gratuit
- Contrôle total sur la fréquence
- Historique des requêtes

---

## 🔧 Solution 4 : GitHub Actions (Si votre code est sur GitHub)

Vous pouvez créer une GitHub Action qui ping votre site régulièrement.

### Créer `.github/workflows/ping-render.yml` :

```yaml
name: Keep Render Alive

on:
  schedule:
    - cron: '*/10 * * * *'  # Toutes les 10 minutes
  workflow_dispatch:  # Permet de déclencher manuellement

jobs:
  ping:
    runs-on: ubuntu-latest
    steps:
      - name: Ping Render
        run: |
          curl -f https://votre-app.onrender.com/health || exit 1
```

✅ **Avantages** :
- Gratuit avec GitHub
- Intégré à votre workflow
- Historique dans GitHub

---

## 🔧 Solution 5 : Service externe simple

### Utiliser `curl` avec un cron local (si vous avez un serveur) :

```bash
# Ajouter dans votre crontab (crontab -e)
*/10 * * * * curl -s https://votre-app.onrender.com/ping > /dev/null
```

---

## 📊 Comparaison des solutions

| Solution | Gratuit | Fréquence | Complexité | Recommandation |
|----------|---------|-----------|------------|----------------|
| **UptimeRobot** | ✅ Oui | 5 min | ⭐ Facile | ⭐⭐⭐⭐⭐ |
| **cron-job.org** | ✅ Oui | Personnalisable | ⭐⭐ Moyen | ⭐⭐⭐⭐ |
| **GitHub Actions** | ✅ Oui | Personnalisable | ⭐⭐⭐ Moyen | ⭐⭐⭐ |
| **Cron local** | ✅ Oui | Personnalisable | ⭐⭐⭐ Difficile | ⭐⭐ |

---

## ⚠️ Limitations du plan gratuit Render

- **Temps de démarrage** : ~30-50 secondes après l'endormissement
- **Limite de temps** : 750 heures/mois (suffisant pour 24/7)
- **Limite de bande passante** : 100 GB/mois

---

## 🎯 Recommandation finale

**Utilisez UptimeRobot** :
1. C'est le plus simple à configurer
2. Gratuit et fiable
3. Monitoring en bonus
4. Alertes automatiques

**URL à utiliser** : `https://votre-app.onrender.com/health`

---

## 📝 Notes importantes

- Les pings toutes les **5-10 minutes** sont suffisants pour maintenir le serveur actif
- Ne pas ping trop souvent (toutes les minutes) : risque de dépasser les limites
- Le premier ping après l'endormissement prendra ~30 secondes (démarrage à froid)

