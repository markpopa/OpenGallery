## Tech Stack
- PHP 8.x met PDO
- MySQL / MariaDB
- HTML / CSS / minimal JS
- Optional: TailwindCSS / Bootstrap voor snelle styling

## Globale Architectuur
- **Frontend**: HTML forms + gallery display
- **Backend**: PHP scripts voor upload, likes, comments, gallery listing
- **Database**: photos, likes, comments tables
- **Uploads**: map op server `/uploads/`

## Belangrijke keuzes
- Geen gebruikersaccounts → sneller MVP
- Simpel like/dislike systeem → geen complexe relaties
- File uploads rechtstreeks naar server + DB entry → eenvoudig te implementeren

## Bekende risico’s
- File upload errors / verkeerde bestandsformaten
- Geen authenticatie → iedereen kan alles uploaden
- Mogelijke database fouten bij veel foto’s
