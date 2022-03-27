# Database Structure

On this page we provide the lists of both functional and non functional requirements.

## Functional Requirements

## Masyarakat

--LOGIN--

### FR01 Login

Fitur ini digunakan untuk proses identifikasi untuk masuk pada sistem yang terdiri dari username/akun pengguna dan password untuk mendapatkan hak akses. 


--REGISTER--

### FR 02 Register

Fitur ini digunakan untuk mendaftarkan diri pada sistem sehingga mendapatkan akun, persyaratan yang diperlukan mendaftar yaitu nama, tempat tangal lahir, NIK dan email.


--PROFILE--

Fitur ini digunakan untuk dapat menampilkan data profile atau data diri dari user, selain menampilkan data diri user pada fitur profile ini juga mengupdate data diri user.

### FR 03 Read Profile
Menampilkan data diri user

### FR 04 Update Profile
Mengupdate data diri user


--INFORMASI KELUHAN--

Fitur ini digunakan untuk dapat menampilkan data keluhan dari masyarakat, informasi keluhan yang ditampilkan yakni keluhan masyarakat, sehingga staf kelurahan dapat melihat informasi detail mengenai data laporan masyarakat. 

### FR 05 Create Informasi Keluhan
Membuat keluhan yang akan disampaikan

### FR 06 Read Informasi Keluhan
Menampilkan keluhan yang dibuat pengguna

### FR 07 Update Informasi Keluhan
Memperbarui/melakukan edit dari keluhan yang sudah dibuat

### FR 08 Delete Informasi Keluhan
Menghapus keluhan yang pernah dibuat


--KUESIONER--

### FR 09 Create Kuesioner
Fitur ini digunakan masyarakat untuk mengisi kuesioner.


--PENGUMUMAN--

### FR 10 Read Pengumuman
Fitur ini digunakan masyarakat untuk melihat pengumuman. 




## Staf Kelurahan


--KUESIONER CONTROL--

Fitur ini digunakan staf kelurahan untuk  membuat OPD dan Category yang diperlukan dalam pengisian kuesioner oleh masyarakat.

### FR 11 Create OPD
Berfungsi untuk membuat OPD baru.

### FR 12 Create Category
Berfungsi untuk membuat Category baru.

### FR 13 Read OPD Category
Berfungsi untuk menampilkan OPD dan Category yang telah dibuat.

### FR 14 Delete OPD
Berfungsi untuk menghapus OPD yang ada.

### FR 15 Delete Category
Berfungsi untuk menghapus OPD yang ada.


--KUESIONER VIEW--

### FR 16 Read Kuesioner
Fitur ini digunakan staf kelurahan untuk  menampilkan kuesioner yang telah di isi oleh masyarakat.


--INFORMASI KELUHAN VIEW--

Fitur ini digunakan staf kelurahan untuk  menampilkan keluhan yang telah dibuat dan menghapus keluhan yang telah diselesaikan.

### FR 17 Read Informasi Keluhan View
Berfungsi untuk menampilkan keluhan yang telah dibuat masyarakat.

### FR 18 Delete Informasi Keluhan View
Berfungsi untuk menghapus keluhan yang telah dibuat masyarakat yang keluhannya telah diselesaikan. 


--PENGUMUMAN ADMIN--

Fitur ini digunakan oleh staf kelurahan untuk membuat pengumuman, menampilkan pengumuman yang telah dibuat, dan menghapus pengumuman.

### FR 19 Create Pengumuman
Fitur ini digunakan untuk membuat pengumuman.

### FR 20 Read Pengumuman
Fitur ini digunakan untuk menampilkan pengumuman yag telah dibuat.

### FR 21 Delete Pengumuman
Fitur ini digunakan untuk menghapus pengumuman yang telah ada.


--LOGOUT--

### FR 22 Logout
Fitur ini digunakan oleh user untuk keluar dari sistem SIKEMAS




## Non Functional Requirements

### NFR01 Availability
Sistem ini dapat beroperasi 7 hari dalam seminggu dan 24 jam dalam satu hari

### NFR02 Reliability
Sistem harus memberikan hasil yang benar secara konsisten dan cukup mampu untuk bertahan dalam kondisi apapun. Karena jika mengalami kegagalan akan mempengaruhi proses berlangsungnya aktivitas pada system

### NFR03 Ergonomy
Sistem ini harus user friendly.

### NFR04 Portability 
Sistem ini dapat dibuka di platform mana saja, baik dari HP maupun laptop atau sejenisnya.

### NFR05 Memory
Sistem memiliki penyimpanan dengan kapasitas yang cukup besar.

### NFR06 Response time
Sistem akan merespon masyarakat dengan waktu paling cepat 2 detik, jika terjadi kesalahan maka akan menampilkan notifikasi.

### NFR07 Security
Ketika masuk kedalam sistem, harus menggunakan akun user dimana ada username dan password. Supaya data milik user lebih aman.

## Mockup

FR 01 Login
![login](https://user-images.githubusercontent.com/78079490/148420283-abfeb170-e57d-459c-bc83-ebebc7e16022.png)

FR 02 Register
![Register](https://user-images.githubusercontent.com/78084093/148421532-b01e9a61-3ebd-4476-9bea-762f8aa3cd5f.png)

FR 03 Read Profile
![Read profile](https://user-images.githubusercontent.com/78079490/148420304-cf3a664a-5be1-4bbc-b70e-db0b4415abeb.png)

FR 04 Update Profile
![Update Profilee](https://user-images.githubusercontent.com/78084093/148421625-e2fa14a8-faea-46ce-95e4-232d7d719858.png)

FR 05 Create Informasi Keluhan
![message](https://user-images.githubusercontent.com/78070500/148418913-2ebd4172-9113-42fe-8968-a63883bc3a93.jpeg)
![create](https://user-images.githubusercontent.com/78070500/148418926-25ee7d37-ab56-405f-b43a-0c8eaa8a99de.jpeg)

FR 06 Read Informasi Keluhan
![read](https://user-images.githubusercontent.com/78070500/148419051-bd8cb47a-a513-4240-a3cd-5c33dc59e3f5.jpeg)

FR 07 Update Informasi Keluhan
![Update Keluhan](https://user-images.githubusercontent.com/78064802/148415167-004b8e0f-935b-4b96-903c-687b74da1ce6.png)
![Update Keluhan 1](https://user-images.githubusercontent.com/78064802/148415178-1dd1282e-5eb0-4297-8def-5027730499c3.png)

FR 08 Delete Informasi Keluhan
![Delete Keluhan](https://user-images.githubusercontent.com/78064802/148415274-3ba25e8c-e918-4eb2-9903-88fc663a0838.png)

FR 09 Create Kuesioner
![Kuesioner Masyarakat step 1](https://user-images.githubusercontent.com/81338777/148425433-4ad9bd6f-76f0-4d8b-9de6-00b95ea9e13c.png)
![Kuesioner Masyarakat step 2](https://user-images.githubusercontent.com/81338777/148425445-df67b51c-517a-4d56-bf96-c8d974d226b2.png)

FR 10 Read Pengumuman
![Read pengumuman](https://user-images.githubusercontent.com/78079490/148420343-1bdecbf1-a501-4cc2-b7f0-667f69fa9d49.png)

FR 11 Create OPD
![Create OPD](https://user-images.githubusercontent.com/81338777/148425539-e558d5f5-2ce0-4e80-88ee-3ad7889d5f35.png)

FR 12 Create Category
![Create Category](https://user-images.githubusercontent.com/81338777/148425553-33fb66f2-c597-48fe-a72b-d9ba517a52a6.png)

FR 13 Read OPD Category
![KuesionerControll](https://user-images.githubusercontent.com/78084093/148422023-97056679-c9dc-4dea-bf37-bf8833e9c69a.png)

FR 14 Delete OPD 
![KuesionerControll](https://user-images.githubusercontent.com/78084093/148422029-550699eb-1f19-4801-a8ab-3b5785ce6dcc.png)

FR 15 Delete Category 
![KuesionerControll](https://user-images.githubusercontent.com/78084093/148422036-c2fb9559-fd86-4c57-aa12-9dad9d56be2c.png)

FR 16 Read Kuesioner
![Read Kuesionerr](https://user-images.githubusercontent.com/81338777/148425895-142c6458-d47a-4184-8507-5484cef9c27e.png)

FR 17 Read Informasi Keluhan View
![read admin](https://user-images.githubusercontent.com/78070500/148419188-2b1e073f-0af3-4425-85eb-44f20ded809a.jpeg)

FR 18 Delete Informasi Keluhan View
![Delete Keluhan View](https://user-images.githubusercontent.com/78064802/148415309-c7633b4c-ddba-4b00-a118-a0c26c77f94c.png)

FR 19 Read Pengumuman 
![Read](https://user-images.githubusercontent.com/78084093/148422961-3997e5c6-d822-4690-8fc6-647213f0e853.jpeg)

FR 20 Create Pengumuman
![create pengumuman](https://user-images.githubusercontent.com/78079490/148420412-88a7490c-f676-4d13-98af-456b17c129cb.png)

FR 21 Delete Pengumuman
![Delete Pengumuman Admin](https://user-images.githubusercontent.com/78064802/148415332-495e82df-8431-4251-84df-26d3d4301417.png)

FR 22 Logout
![logout](https://user-images.githubusercontent.com/78079490/148420443-7a370710-8108-43e2-b72b-660d07aab9cc.png)

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
