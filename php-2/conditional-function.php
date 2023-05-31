<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php
    echo "<h3> Soal No 1 Greetings </h3>";
    function greetings($params)
    {
        return "<p>Halo " . $params . ", Selamat Datang di Garuda Cyber Institute! </p>";
    }
    /*Soal No 1
Greetings Buatlah sebuah function greetings() yang menerima satu parameter berupa string. contoh: greetings("abduh"); Output: "Halo Abduh, Selamat Datang di Garuda Cyber Institute!" */
    // Code function di sini
    // Hapus komentar untuk menjalankan code!
    // greetings("Bagas");
    // greetings("Wahyu");
    // greetings("nama peserta");
    echo greetings("Bagas");
    echo greetings("Wahyu");
    echo greetings("Khairul Abidin");
    echo "<br>";
    echo "<h3>Soal No 2 Reverse String</h3>";
    /*Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while). Function reverseString menerima satu parameter berupa string. NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING! reverseString("abdul"); Output: ludba
*/
    // Code function di sini
    // Hapus komentar di bawah ini untuk jalankan Code
    // reverseString("nama peserta");
    // reverseString("Garuda Cyber Institute");
    // reverseString("We Are GC-Ins Developer") echo
    function reverseString($params)
    {
        $result = '';
        for ($i = strlen($params) - 1; $i >= 0; $i--) {
            $result .= $params[$i];
        }
        return $result;
    }
    echo "Kebalikan dari nama peserta adalah " . reverseString("nama peserta") . "<br>";
    echo "Kebalikan dari Garuda Cyber Institute adalah" . reverseString("Garuda Cyber Institute") . "<br>";
    echo "Kebalikan dari We Are GC-Ins Developer adalah" . reverseString("We Are GC-Ins Developer") . "<br>";
    echo "<h3>Soal No 3 Palindrome </h3>";
    function palindrome($params)
    {
        if (reverseString($params) == $params) {
            $result = "true";
        } else {
            $result = "false";
        }
        echo $params . " adalah palindrome " . $result . "<br>";
    }
    palindrome("civic");
    palindrome("nababan");
    palindrome("jambaban");
    palindrome("racecar");
    /*Soal No 3
Palindrome Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false. NB: Contoh: palindrome("katak") => output : "true" palindrome("jambu") => output : "false" NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2! */
    // Code function di sini
    // Hapus komentar di bawah ini untuk jalankan code
    // palindrome("civic") ; // true
    // palindrome("nababan") ; // true
    // palindrome("jambaban"); // false
    // palindrome("racecar"); // true
    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*Soal 4
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama
dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang” */
    // Code function di sini
    // Hapus komentar di bawah ini untuk jalankan code
    // echo tentukan_nilai(98); //Sangat Baik
    // echo tentukan_nilai(76); //Baik
    // echo tentukan_nilai(67); //Cukup
    // echo tentukan_nilai(43); //Kurang
    function tentukan_nilai($params)
    {
        if (is_int($params)) {
            if ($params >= 85 && $params <= 100) {
                $result = "Sangat Baik <br>";
            } elseif ($params >= 70 && $params < 85) {
                $result = "Baik <br>";
            } elseif ($params >= 60 && $params < 70) {
                $result = "Cukup <br>";
            } elseif ($params > 0 && $params < 60) {
                $result = "Kurang <br>";
            } else {
                $result = "Nilai yang diinputkan diluar rentang 1-100 <br>";
            }
        } else {
            $result = "Nilai yang dimasukkan harus berupa integer <br>";
        }
        return $result;
    }
    echo "Hasil dari inputan khairul = " . tentukan_nilai("khairul");
    echo "Hasil dari nilai 98 = " . tentukan_nilai(98); //Sangat Baik
    echo "Hasil dari nilai 76 = " . tentukan_nilai(76); //Baik
    echo "Hasil dari nilai 67 = " . tentukan_nilai(67); //Cukup
    echo "Hasil dari nilai 43 = " . tentukan_nilai(43); //KurangF
    echo "Hasil dari nilai 223 = " . tentukan_nilai(223);
    ?>
</body>

</html>