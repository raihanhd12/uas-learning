<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Privacy;
use App\Models\CourseUser;
use App\Models\Disclaimer;
use App\Models\Instructor;
use App\Models\CourseLevel;
use App\Models\CoursePrice;
use App\Models\BlogCategory;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        
        //-----------------------------------//
        //--------BEGIN Seeder User----------//       
        // --------------------------------- //
        User::create([
            'name' => 'Raihan HD',
            'username' => 'raihan12',
            'email' => 'raihan@admin.com',
            'password' => bcrypt('12345'),
            'is_admin' => true,
            'is_status' => true            
        ]);

        User::factory(10)->create();        
        //-----------------------------------//
        //----------END Seeder User----------//       
        // --------------------------------- //
        
        
        //-----------------------------------//
        //--------BEGIN Seeder Blog----------//       
        // --------------------------------- //
        BlogCategory::create([
            'name' => 'Saham'            
        ]);

        BlogCategory::create([
            'name' => 'Reksa Dana'            
        ]);

        BlogCategory::create([
            'name' => 'Financial'            
        ]);

        BlogCategory::create([
            'name' => 'P2P Lending'            
        ]);

        BlogCategory::create([
            'name' => 'Community'            
        ]);

        Blog::factory(8)->create();        
        //-----------------------------------//
        //---------END Seeder Blog-----------//       
        // --------------------------------- //


        //-----------------------------------//
        //--------BEGIN Seeder Course--------//       
        // --------------------------------- //

        Instructor::factory(2)->create();

        // Course Categories 
        CourseCategory::create([
            'name' => 'Manajemen Income'            
        ]);

        CourseCategory::create([
            'name' => 'Reksa Dana'            
        ]);

        CourseCategory::create([
            'name' => 'Insurance'            
        ]);

        CourseCategory::create([
            'name' => 'Saham'            
        ]);
        CourseCategory::create([
            'name' => 'Cryptocurrency'            
        ]);
        CourseCategory::create([
            'name' => 'Peer-to-Peer Lending'            
        ]);
        CourseCategory::create([
            'name' => 'Obligasi'            
        ]);

        // Course level
        CourseLevel::create([
            'name' => 'Beginner'            
        ]);
        CourseLevel::create([
            'name' => 'Intermediate'            
        ]);
        
        // Course Price
        CoursePrice::create([
            'name' => 'Free'            
        ]);
        CoursePrice::create([
            'name' => 'Paid'            
        ]);

        // Course::factory(10)->create();        
        //-----------------------------------//
        //----------END Seeder Course--------//       
        // --------------------------------- //

        //-----------------------------------//
        //------BEGIN Seeder Course User-----//       
        // --------------------------------- //
        
        // CourseUser::factory(4)->create();

        //-----------------------------------//
        //-------END Seeder Course User------//       
        // --------------------------------- //

        //-----------------------------------//
        //---------BEGIN Seeder Lesson-------//       
        // --------------------------------- //
        
        // Lesson::factory(7)->create();

        //-----------------------------------//
        //----------END Seeder Lesson--------//       
        // --------------------------------- //

        //-----------------------------------//
        //---------BEGIN Seeder Privacy------//       
        // --------------------------------- //

        Privacy::create([
            'body' => '        <h3><b>1. Keberlakuan Kebijakan Privasi</b></h3>
            <p>Kami tim RHDLearning sangat peduli terhadap privasimu saat mengunjungi, mendaftar, memberikan informasi, maupun menggunakan website/aplikasi maupun menggunakan layanan Kami sehubungan dengan penggunaan website/aplikasi tersebut.</p><p>Kebijakan Privasi ini merupakan bagian yang tidak terpisahkan dari Ketentuan Layanan, yang khusus menjelaskan bagaimana Kami menggunakan informasi pribadimu yang Kamu berikan, Kami kumpulkan dan/atau Kami terima dari sumber lain (“Informasi Pribadi”).</p><p>Mohon membaca Kebijakan Privasi Kami dengan seksama sehingga Kamu dapat memahami pendekatan dan cara Kami dalam menggunakan informasi tersebut. Dengan mengunjungi, mendaftar, memberikan informasi, maupun menggunakan setiap dan seluruh fitur dari dan layanan yang terkait dengan Portal, maka Kamu telah menyetujui Kebijakan Privasi ini. Jika Kamu tidak setuju dengan Kebijakan Privasi ini, mohon untuk tidak mengunjungi, mendaftar, memberikan informasi, maupun menggunakan fitur apapun pada website/aplikasi.</p>
    
            <h3><b>2. Persetujuan</b></h3>
            <p>Dengan mengunjungi, mendaftar, memberikan informasi, menggunakan website/aplikasi, menggunakan layanan Kami terkait website/aplikasi, maupun berkorespondensi dengan Kami dengan media apapun juga, maka Kamu menyetujui bahwa Kami dapat mengumpulkan Informasi Pribadi untuk kegunaan Kami dalam bentuk pemasaran maupun monetisasi data dengan pihak luar perusahaan.</p>
    
            <h3><b>3. Informasi Pribadi yang Dapat Kami Kumpulkan</b></h3>
            <p>Informasi Pribadi yang Dapat Kami Kumpulkan adalah sebagai berikut:</p><p>1. Informasi yang Kamu Berikan</p><ul><p>Kamu dapat memberikan informasi melalui formulir elektronik pada website/aplikasi Kami maupun dengan berkorespondensi melalui telepon, surat elektronik, media sosial, maupun dengan metode lainnya.</p></ul><p><ul> Informasi ini termasuk namun tidak terbatas pada informasi yang Kamu berikan ketika mengisi survei (baik melalui website/aplikasi, surat elektronik, sosial media, maupun dengan metode lainnya), mendaftar pada website/aplikasi, menggunakan setiap dan seluruh fitur website/aplikasi, berlangganan layanan Kami, berdiskusi dengan Kami, informasi sehubungan dengan permohonan refund atas biaya berlangganan pada website/aplikasi Kami, testimoni, dan sebagainya.</ul></p><ul><p>Informasi yang Kamu berikan dapat meliputi nama, alamat surat elektronik, informasi seputar media data diri kamu, informasi nomor telepon, surat elektronik dan data lainnya. Kami dapat meminta Kamu untuk melakukan verifikasi terhadap informasi yang Kamu berikan, untuk memastikan akurasi dari informasi tersebut.</p></ul><p>2. Informasi yang Kami Terima dari Sumber Lain</p><ul><p>Kami juga dapat mengumpulkan informasi pribadi melalui teknologi deteksi lainnya yang umum digunakan pada situs web, surat elektronik, maupun media sosial.</p></ul><p><ul> Kami juga dapat bekerja sama dengan pihak ketiga (termasuk, namun tidak terbatas pada misalnya, mitra bisnis, sub-kontraktor dalam pelayanan teknis, jasa pembayaran, jaringan periklanan, penyedia analisis, penyedia pencarian informasi) (“Mitra Pihak Ketiga”) dan dapat menerima Informasi Pribadi dari mereka.</ul></p>
    
            <h3><b>4. Informasi yang Dikecualikan</b></h3>
            <p>Kami bekerja sama dengan penyedia layanan payment gateway pihak ketiga sehubungan dengan pembayaran yang Kamu lakukan Ketika berlangganan layanan Kami melalui website/aplikasi. Selain dari informasi ringkasan transaksi yang Kami dapatkan dari penyedia layanan payment gateway, Kami tidak mengumpulkan maupun menyimpan informasi pembayaran (misalnya informasi mengenai kartu kredit) yang Kamu masukkan melalui sistem yang disediakan masing-masing layanan payment gateway.Setiap informasi pembayaran yang Kamu berikan saat melakukan pembayaran melalui layanan payment gateway merupakan informasi yang dikecualikan dari Kebijakan Privasi ini dan tunduk pada kebijakan privasi dari masing-masing penyedia layanan payment gateway. Kami tidak bertanggung jawab atas kebijakan privasi dari setiap penyedia layanan payment gateway.</p><p>Sebagaimana dijelaskan di atas, Kami juga dapat bekerja sama dengan Mitra Pihak Ketiga dalam menyediakan layanan Portal. Setiap dan seluruh informasi yang Kamu berikan kepada Mitra Pihak Ketiga sehubungan dengan hal tersebut merupakan informasi yang dikecualikan dari Kebijakan Privasi ini dan tunduk pada kebijakan privasi dari masing-masing penyedia layanan pihak ketiga.</p><p>Untuk menghindari keraguan, Kami tidak bertanggung jawab untuk setiap dan seluruh penyalahgunaan informasi yang dilakukan oleh penyedia layanan pihak ketiga.</p>
    
            <h3><b>5. Penyimpanan Informasi Pribadi</b></h3>
            <p>Kami dapat menggunakan layanan pihak ketiga, baik yang disediakan di dalam maupun di luar negeri, untuk melakukan penyimpanan Informasi Pribadi, dalam hal mana Kami akan mengambil langkah-langkah yang wajar dan komersil untuk memastikan bahwa Informasi Pribadi tersebut disimpan dengan aman dan sesuai dengan Kebijakan Privasi serta hukum yang berlaku (termasuk dengan cara menunjuk pihak ketiga yang kredibel untuk melakukan penyimpanan hal tersebut). Kami dapat, sewaktu-waktu sesuai dengan direksi Kami, menghapus permanen Informasi Pribadi yang Kami simpan. Ketentuan penyimpanan Informasi Pribadi berdasarkan bagian ini dimulai saat Kami telah menerima Informasi Pribadimu. Adapun seluruh risiko atas transmisi Informasi Pribadi yang Kamu lakukan berada di luar kuasa Kami dan bukan merupakan tanggung jawab Kami, untuk itu, mohon untuk memperhatikan keamanan atas transmisi informasi melalui internet pada perangkat maupun jaringan internet yang Kamu pergunakan.</p>
          </div>'
        ]);
        //-----------------------------------//
        //----------END Seeder Privacy-------//       
        // --------------------------------- //

        //-----------------------------------//
        //-------BEGIN Seeder Disclaimer-----//       
        // --------------------------------- //
        Disclaimer::create([
            'body' => 'Setiap orang dapat memiliki pengalaman, pemahaman, komitmen, dan cara penerapan yang berbeda-beda atas penggunaan edukasi pada website, dan karenanya hasil pembelajaran dari setiap individu berbeda-beda. Kami tidak menjamin suatu hasil tertentu dalam kegiatan edukasi di website, dan setiap pernyataan yang bertentangan dengan penolakan jaminan ini (jika ada), adalah semata-mata untuk keperluan edukasi dan bukan merupakan jaminan hasil. Setiap testimonial yang terdapat pada website merupakan pendapat pribadi dari masing-masing pemberi testimonial, serta bukan merupakan suatu jaminan untuk mendapat hasil serupa. Testimonial tersebut juga tidak dapat dipergunakan sebagai acuan hasil rata-rata yang bisa diperoleh oleh Pengguna Website. RHD Learning juga tidak memberikan saran dalam tindakan investasi yang dilakukan oleh pengguna. Segala keputusan yang dilakukan pengguna adalah 100% tanggung jawab pengguna.'
        ]);
        //-----------------------------------//
        //--------END Seeder Disclaimer------//       
        // --------------------------------- //
    }
}
