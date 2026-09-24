# GlassLAN Cloud Backend

Backend PHP 8.4 Docker pour Render.

## Render
1. Pousse ce dossier sur GitHub.
2. New > Web Service > repo GitHub.
3. Render détecte le Dockerfile.
4. Health check: `/health`.
5. Copie l’URL `https://...onrender.com` dans `API_BASE` du frontend InfinityFree.

## Persistance
Le stockage JSON/media fonctionne localement. Sur Render Free, le filesystem est éphémère. Pour de la vraie persistance, utilise un disque persistant Render (payant) monté sur `/app/storage`, ou migre les messages vers Postgres et les médias vers un object storage.

## CORS
En production, remplace `ALLOWED_ORIGIN=*` par l’origine exacte de ton site InfinityFree.
