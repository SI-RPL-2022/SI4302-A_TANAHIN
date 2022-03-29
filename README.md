# MoLand oleh MigrasiLine
![logo](https://user-images.githubusercontent.com/89830741/153765576-ffd8fd60-dc36-4599-892b-217500c4750a.png)
Website ini merupakan hasil melakukan *7 days project sprint* oleh tim MigrasiLine.
```
MigrasiLine terdiri dari: 
- Muhammad Rizal Bimantoro (Hacker)
- Tammara Audina Putri (Hustler)
- Hanif Muflihul Anwar (Hipster)
```

## Apa yang dimaksud dengan MoLand?

MoLand merupakan sebuah *website e-commerce* yang berfokus pada jual beli tanah dan melakukan investasi tanah. MoLand memiliki tujuan dalam Pembangunan yang Berkeadilan di Indonesia dengan memfasilitasi semua transaksi Kavling Tanah. Selain itu, MoLand memiliki misi untuk meningkatkan minat dan pengetahuan masyarakat tentang investasi tanah. Website ini memberikan layanan penting yang berhubungan dengan tanah dan memudahkan pemilik tanah, serta orang-orang yang ingin membeli tanah. 

Prototype Figma: https://www.figma.com/file/5yK1ZPD5yWpqVpjetfQt4x/MoLand?node-id=205%3A1408

## Bagaimana cara *install website* ?
1. Install Laravel , Composer dan XAMPP
http://agussuratna.net/2020/11/27/cara-install-laravel-8-di-windows/

2. Install Git
https://www.petanikode.com/git-install/ 

3. Memasang Moland Pada Local Host

4. Buat Folder Baru
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153764490-8c0cb273-1976-4c90-9ecb-94217ff58bcb.png">

5. Pada Folder Baru tersebut klik kanan lalu pilih git bash here
<img width="269" alt="image" src="https://user-images.githubusercontent.com/89830741/153764851-eb9abd2f-1df2-4d6c-8fca-fc0ed649b2e5.png">

6. Pada Terminal Git Ketik git clone https://github.com/rebimantoro/moland.git
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765045-15250f09-978b-407a-913e-6e18835da0ca.png">

7. Tunggu Proses Sampai Selesai
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765115-8c3691cc-d315-4ded-8c4a-e0411dbbce32.png">

8. Pindah ke directory moland dengan dengan sintaks cd moland
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765322-7a229940-6621-4ce5-ba69-65f28df5df2e.png">

9. Ketikan code . untuk membuka project moland
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765331-e57c7015-94de-4e7a-8e7a-9b4e1851ea5c.png">

10. Pada vs code buat file baru dengan nama .env
<img width="258" alt="image" src="https://user-images.githubusercontent.com/89830741/153765337-73112886-3f11-4fbb-9a0a-64940e5fcfd4.png">

11. Copy isi file .envexample kedalam .env kemudian save file
<img width="438" alt="image" src="https://user-images.githubusercontent.com/89830741/153765361-dae736ff-b912-42ab-aa92-3d7f38c1ae63.png">

12. Buka xampp dan start module apache dan mysql
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765376-614c1415-5838-4167-9277-94e03e0b52d6.png">

13. Buka Php My Admin dengan melakukan klik admin pada modul mysql
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765396-33578c7b-440d-4f63-b990-87b126b8323e.png">

14. Buat database dengan nama moland
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765427-500620ae-ad6f-4b70-8bae-24e1bc7fa90c.png">

15. Install pada composer pada terminal git dengan sintaks composer install (tunggu sampai selesai)
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765431-145f27fc-6a78-4d9d-b0b5-0b06500e7f3c.png">

<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765434-1fd372f2-f967-4cb7-92b3-6fae7ab905ea.png">

16. Generate key dengan sintak `php artisan key:generate`
<img width="363" alt="image" src="https://user-images.githubusercontent.com/89830741/153765446-7b50c283-dbed-46f7-b708-0cd8dc0f4780.png">

17. Lakukan migrasi database dengan sintaks `php artisan migrate`
Masukan seeder dengan sintaks `php artisan db:seed –class=DatabaseSeeder`
Jalankan aplikasi dengan perintah php artisan serve

<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765473-d520fec7-d165-409b-983e-056e70ae5a80.png">

18. Moland sudah berjalan
<img width="452" alt="image" src="https://user-images.githubusercontent.com/89830741/153765485-8b623524-b8d4-4e92-87ee-48af19b5c753.png">


## Teknologi yang Digunakan
- Laravel versi 8
- Bootstrap versi 5
- Visual Studio Code 
- XAMPP
