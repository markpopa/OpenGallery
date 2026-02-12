## Applicatie Overzicht
```mermaid
    flowchart TD
    Browser -->|HTTP request| PHP_Server
    PHP_Server --> Database
    PHP_Server --> Uploads_Folder
    PHP_Server --> Browser


    flowchart TD
    User -->|Upload photo + title| Upload_Form
    Upload_Form -->|POST data| Upload_Handler
    Upload_Handler --> Database
    Upload_Handler --> Uploads_Folder
    Upload_Handler -->|Success| User
    User -->|View gallery| Gallery_Page
    Gallery_Page --> Database
    Gallery_Page -->|Fetch photo| Uploads_Folder
    Gallery_Page --> User
