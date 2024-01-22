Doctor's Appointment Calender
This website is built only for one user so I don't use authentication for it. For multiple user, it can be updated.
I used Tailwind and DaisyUI with Laravel to build this website. Though I made it responsive but it can create some problems in the small devices as the calendar has 7 rows. For linked tailwind and DaisyUI using CDN, so no need to install tailwind or DaisyUI for running this project. To run this project for the first time, need to create an .env file then update the database name and then use the command "php artisan migrate" and to see the output of this project you need to run "php artisan serve". 
<be>
Here I have shown only for single user. For multiple users, need to go to the multiple-user branch by command "git checkout multiple-user". Then need to run "php artisan migrate" to create migration tables. Then to see the output run "npm run dev" and "php artisan serve". For multiple-user authentication, I used Laravel Breeze and created a relationship between 'users' and 'appointments' table. 'users' primary key 'id' is the foreign key of the'appointments' table. 

![Screenshot 2024-01-22 175713](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/b99f99cd-7521-4a63-ab25-610e746e96c3)
![Screenshot 2024-01-22 175743](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/5a1c3bba-bf85-4022-a545-6975f3f88755)
![Screenshot 2024-01-22 175359](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/9970ad9a-774c-48a7-9152-edaba51e15ea)
![Screenshot 2024-01-22 175511](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/01f10acf-a896-46a6-a6b5-d235793194b2)
![Screenshot 2024-01-22 175843](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/b7bf1a09-5d3b-4b73-a247-11af2232eb8d)
![Screenshot 2024-01-22 175816](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/e8c40be8-3ba7-4ada-8318-420e8b9082a7)
![Screenshot 2024-01-22 175428](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/4f901d1c-4c90-49f0-9dc2-5f31a5fd9900)
![Screenshot 2024-01-22 180400](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/a2a3fb8d-e767-4178-8d52-49fb4075abb8)
![Screenshot 2024-01-22 175910](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/67384acd-f683-4307-b45f-de275d70fc5f)
![Screenshot 2024-01-22 175934](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/c13d7025-fc78-4056-b45c-ebc303711485)
![Screenshot 2024-01-22 175627](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/449f4dda-b3d6-4d63-b312-70779d6bb095)

Multiple-user UI
![Screenshot 2024-01-22 232609](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/12ef33e5-7359-42bd-b928-759cd9d4a6f8)
![Screenshot 2024-01-22 232632](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/4ac065c9-62cb-4001-a816-6a62e194f88f)
![Screenshot 2024-01-22 232707](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/9693578e-ae30-4b14-817f-ec9d7a874c65)
![Screenshot 2024-01-22 232329](https://github.com/mdalarmansorker/doctor-appointment-calender/assets/73396847/c4527460-7e9a-4e66-9f1a-b01a07486555)

