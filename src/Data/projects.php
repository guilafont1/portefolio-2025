<?php

return [
    [
        'slug' => 'oms-monkeypox-dashboard',
        'title' => 'OMS Monkeypox - Data Dashboard & Predictive Platform',
        'description' => 'Plateforme de visualisation de données et prédiction IA pour le suivi de la variole du singe. Solution multi-cluster conforme DevOps, CI/CD, accessibilité WCAG et sécurité.',
        'long_description' => 'Projet MSPR TRPE601 réalisé dans le cadre de la certification RNCP 36581 (blocs E6.3 & E6.4). Développement d\'une solution complète de dashboard de données avec IA prédictive pour le suivi de la variole du singe. L\'application est déployée sur plusieurs clusters internationaux (France RGPD, USA pour volume élevé, Suisse trilingue). J\'ai développé l\'ensemble de la solution : dataviz interactive, authentification sécurisée, modèle prédictif Random Forest, accessibilité audio avec synthèse vocale, interface multi-langues, tests automatisés, dockerisation, pipeline CI/CD GitLab avec déploiement automatique sur Render, et backup automatisé. Le projet est conforme aux normes WCAG 2.1 AA et EN 301 549.',
        'technologies' => ['Python', 'Flask', 'MySQL', 'scikit-learn', 'pandas', 'Docker', 'GitLab CI/CD', 'Render', 'gTTS', 'Swagger'],
        'image' => '/images/projects/monkeypox.jpg',
        'date' => '2025',
        'status' => 'Terminé',
        'link' => 'https://mspr-prod-2.onrender.com/',
        'github' => null,
        'my_role' => 'Développeur Fullstack - J\'ai conçu et développé l\'ensemble de la plateforme : architecture Flask, modèle IA Random Forest, pipeline CI/CD complet, dockerisation, déploiement multi-cluster, accessibilité WCAG, et documentation technique.',
        'achievement' => 'J\'ai mis en place un pipeline CI/CD complet avec validation automatique du modèle IA, tests d\'accessibilité, et déploiement automatique sur Render. La solution est déployée sur 3 clusters internationaux avec gestion RGPD pour la France.',
        'learned' => 'Ce projet m\'a permis de maîtriser le déploiement multi-cluster, la mise en production d\'IA avec validation automatisée, l\'accessibilité web (WCAG 2.1 AA), et la construction de pipelines CI/CD robustes avec Docker-in-Docker. J\'ai aussi approfondi Flask, scikit-learn, et l\'intégration de synthèse vocale pour l\'accessibilité.',
        'improvements' => 'Je pourrais améliorer la scalabilité avec Kubernetes pour une meilleure gestion des clusters. Aussi, j\'aimerais ajouter plus de modèles prédictifs et améliorer le monitoring en temps réel.',
        'features' => [
            'Dataviz interactive (barres, lignes, camemberts)',
            'Authentification sécurisée Flask-Login avec conformité RGPD',
            'IA prédictive via Random Forest (scikit-learn)',
            'Accessibilité audio avec synthèse vocale (gTTS)',
            'Interface ergonomique multi-langues (FR, EN, DE, IT)',
            'Tests automatisés (lint, validation IA, API)',
            'Dockerisation complète avec Dockerfile de production',
            'Pipeline CI/CD GitLab (lint, evaluate-model, accessibility, deploy, backup)',
            'Déploiement automatique sur Render multi-cluster',
            'Backup automatisé des données',
            'Conformité WCAG 2.1 AA et EN 301 549',
            'API REST documentée avec Swagger'
        ]
    ],
    [
        'slug' => 'adphone-colmar',
        'title' => 'AD\'PHONE Colmar - Site Vitrine',
        'description' => 'Site vitrine statique pour la boutique AD\'PHONE Colmar. Présentation des services, catalogue, horaires et contact avec intégration Google Maps.',
        'long_description' => 'Site vitrine développé pour la boutique AD\'PHONE Colmar. Le site présente les services de la boutique (vente, réparation, accessoires), le catalogue complet des prestations (réparation toutes marques, réparation express, accessoires électroniques, produits cosmétiques, reconditionné, services annexes), les horaires et informations pratiques, ainsi qu\'une section contact avec carte Google Maps intégrée.',
        'technologies' => ['HTML5', 'CSS3', 'Bootstrap 5', 'Bootstrap Icons', 'JavaScript', 'Google Maps API'],
        'image' => '/images/projects/adphone.jpg',
        'date' => '2025',
        'status' => 'Terminé',
        'link' => 'https://ad-phone.netlify.app/',
        'github' => null,
        'features' => [
            'Hero section avec accroche',
            'Section "Nos services" (vente, réparation, accessoires)',
            'Catalogue & Prestations détaillé',
            'Horaires et informations pratiques',
            'Section contact avec formulaire',
            'Carte Google Maps intégrée',
            'Design responsive avec Bootstrap 5',
            'Footer avec année automatique'
        ]
    ],
    [
        'slug' => 'kooreo-ecosystem',
        'title' => 'Écosystème KOOREO - IoT & Cloud',
        'description' => 'Développement et évolution de solutions numériques liées à l\'IoT, au cloud et aux applications métier. Intervention sur les produits CAP CLEAN, CAP CONTROL et Kooreo Connect.',
        'long_description' => 'Dans le cadre de mon alternance chez KOOREO, je travaille sur un écosystème complet mêlant Symfony, IoT, mobile, cloud, data, IA, sécurité et optimisation. Mon rôle est transversal : analyse, conception, développement, performance, infrastructure, documentation et collaboration d\'équipe.',
        'technologies' => ['Symfony', 'PHP', 'Flutter', 'Node.js', 'Docker', 'Bluetooth', 'IoT', 'IA', 'Cloud'],
        'image' => '/images/projects/kooreo.jpg',
        'date' => '2024-2026',
        'status' => 'En cours',
        'link' => 'https://www.kooreo.fr/',
        'github' => null,
        'my_role' => 'Développeur Fullstack - Je refactorise les APIs, optimise les traitements de données IoT, et développe des prototypes IA pour la détection d\'anomalies.',
        'achievement' => 'J\'ai refactorisé la partie IoT pour réduire les temps de réponse de 40%. J\'ai aussi mis en place un système de détection d\'anomalies qui alerte automatiquement en cas de problème sur les capteurs.',
        'learned' => 'J\'ai appris énormément sur l\'architecture IoT, le traitement de flux de données en temps réel, et l\'intégration d\'IA dans des systèmes de production. La gestion de la connectivité Bluetooth et la standardisation des trames, c\'est plus complexe que ça en a l\'air !',
        'improvements' => 'Je voudrais améliorer la scalabilité du système de traitement des données. Aussi, je réfléchis à créer un composant Symfony réutilisable pour la gestion des capteurs IoT.',
        'features' => [
            'Développement backend Symfony : création et amélioration d\'API',
            'Travail sur la data et les capteurs : analyse de flux Bluetooth',
            'Exploration IA appliquée : détection d\'anomalies, analyse de tendances',
            'Développement multiplateforme : modules Flutter et services Node.js',
            'Qualité, performance & optimisation : diagnostic et optimisation des performances',
            'Infrastructure & sécurité : intégration Tailscale, supervision Raspberry Pi'
        ]
    ],
    [
        'slug' => 'simonay-maroc',
        'title' => 'Simonay Maroc - E-commerce',
        'description' => 'Développement d\'un site de commande de vêtements avec Laravel.',
        'long_description' => 'Stage réalisé chez Simonay Maroc où j\'ai développé un site e-commerce complet pour la commande de vêtements. Le projet incluait la gestion des produits, des commandes, des utilisateurs et un système de paiement.',
        'technologies' => ['Laravel', 'PHP', 'MySQL', 'Bootstrap', 'JavaScript'],
        'image' => '/images/projects/simonay.jpg',
        'date' => '2024',
        'status' => 'Terminé',
        'link' => null,
        'github' => null,
        'features' => [
            'Gestion des produits et catégories',
            'Système de commande en ligne',
            'Gestion des utilisateurs et authentification',
            'Interface d\'administration',
            'Système de paiement intégré'
        ]
    ],
    [
        'slug' => 'gestion-comptes-bancaires',
        'title' => 'Gestion de Comptes Bancaires',
        'description' => 'Application de gestion de comptes bancaires développée avec Spring Boot.',
        'long_description' => 'Projet réalisé lors de mon stage chez Simonay Maroc. Application backend complète pour la gestion de comptes bancaires avec API REST, authentification sécurisée et gestion des transactions.',
        'technologies' => ['Spring Boot', 'Java', 'PostgreSQL', 'REST API', 'JWT'],
        'image' => '/images/projects/banking.jpg',
        'date' => '2024',
        'status' => 'Terminé',
        'link' => null,
        'github' => null,
        'features' => [
            'API REST complète',
            'Gestion des comptes bancaires',
            'Système de transactions',
            'Authentification JWT',
            'Documentation API avec Swagger'
        ]
    ],
    [
        'slug' => 'mjc-duchere',
        'title' => 'Modernisation Site MJC Duchère',
        'description' => 'Modernisation et refonte du site WordPress de la MJC Duchère.',
        'long_description' => 'Stage réalisé à la MJC Duchère où j\'ai modernisé leur site WordPress existant. Le projet incluait la refonte de l\'interface utilisateur, l\'optimisation des performances et l\'amélioration de l\'expérience utilisateur.',
        'technologies' => ['WordPress', 'PHP', 'CSS', 'JavaScript', 'HTML'],
        'image' => '/images/projects/mjc.jpg',
        'date' => '2022',
        'status' => 'Terminé',
        'link' => null,
        'github' => null,
        'features' => [
            'Refonte complète de l\'interface',
            'Optimisation des performances',
            'Amélioration du responsive design',
            'Mise à jour du contenu',
            'Formation des utilisateurs'
        ]
    ]
];

