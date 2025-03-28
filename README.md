# Clinic Appointment System

## Folder Structure

```
Clinic_Appointment_System/
│
├── admin/                  # Admin-specific files
│   ├── dashboard.php       # Admin dashboard
│   ├── manage_users.php    # User management
│   ├── manage_appointments.php  # Appointment management
│   └── clinic_settings.php # Clinic settings
│
├── doctor/                 # Doctor-specific files
│   ├── dashboard.php       # Doctor dashboard
│   ├── patient_records.php # View patient records
│   ├── patient_history.php # View/add medical records
│   └── manage_appointments.php  # Manage appointments
│
├── patient/                # Patient-specific files
│   ├── dashboard.php       # Patient dashboard
│   ├── book_appointment.php # Book appointments
│   └── my_appointments.php # View appointments
│
├── includes/               # Shared files
│   ├── db.php              # Database connection
│   ├── functions.php       # Common functions
│   └── navbar.php          # Navigation bar
│
├── assets/                 # Static assets
│   ├── css/                # CSS files
│   ├── js/                 # JavaScript files
│   └── img/                # Images
│
├── index.php               # Main entry point
├── login.php               # Login page
├── register.php            # Registration page
├── logout.php              # Logout script
└── clinic_appointment_system.sql  # Database schema
```

## Setup Instructions

1. Create all the folders as shown in the structure above
2. Move existing files to their appropriate folders
3. Update include paths in all files to reflect the new structure
4. Update redirects in all files to point to the correct locations #   H o s p i t a l _ M a n a g e m e n t _ S y s t e m  
 