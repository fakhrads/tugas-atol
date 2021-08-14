<?php
$result = null;
if(isset($_POST['cekgejala'])){

    $kelamin = filter_input(INPUT_POST, 'kelamin', FILTER_SANITIZE_STRING);
    $sakit_kepala = filter_input(INPUT_POST, 'sakit_kepala', FILTER_SANITIZE_STRING);
    $pulang_luar_negeri = filter_input(INPUT_POST, 'pulang_luar_negeri', FILTER_SANITIZE_STRING);
    $kontak_dengan_positif = filter_input(INPUT_POST, 'kontak_dengan_positif', FILTER_SANITIZE_STRING);
    $demam = filter_input(INPUT_POST, 'demam', FILTER_SANITIZE_STRING);
    $batuk = filter_input(INPUT_POST, 'batuk', FILTER_SANITIZE_STRING);
    $usia_lanjut = filter_input(INPUT_POST, 'usia_lanjut', FILTER_SANITIZE_STRING);
    $sesak_nafas = filter_input(INPUT_POST, 'sesak_nafas', FILTER_SANITIZE_STRING);
    $daerah = strtoupper(filter_input(INPUT_POST, 'daerah', FILTER_SANITIZE_STRING));
    
    
    $is_male = 0;
    $is_female = 0;
    $above_60_yes = 0;
    $above_60_no = 0;

    if($kelamin == "1") {
        $is_female = 1;
        $is_male = 0;
    } else {
        $is_female = 0;
        $is_male = 1;
    }

    if($usia_lanjut == "1") {
        $above_60_yes = 1;
        $above_60_no = 0;
    } else {
        $above_60_yes = 0;
        $above_60_no = 1;
    }

    $curl = curl_init();

    curl_setopt_array($curl, [
    	CURLOPT_URL => "https://coronavirus-symptoms-predictor1.p.rapidapi.com/?has_head_ache=".$sakit_kepala."&is_female=".$is_female."&contact_with_confirmed=".$kontak_dengan_positif."&has_been_abroad=".$pulang_luar_negeri."&is_male=".$is_male."&has_fever=".$demam."&has_cough=".$batuk."&above_60_yes=".$above_60_yes."&above_60_no=".$above_60_no."&has_shortness_of_breath=".$sesak_nafas,
    	CURLOPT_RETURNTRANSFER => true,
    	CURLOPT_FOLLOWLOCATION => true,
    	CURLOPT_ENCODING => "",
    	CURLOPT_MAXREDIRS => 10,
    	CURLOPT_TIMEOUT => 30,
    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    	CURLOPT_CUSTOMREQUEST => "POST",
    	CURLOPT_HTTPHEADER => [
    		"x-rapidapi-host: coronavirus-symptoms-predictor1.p.rapidapi.com",
    		"x-rapidapi-key: BLCWiekzXcmshH6pyLg4p2OAWUZap1RwCGZjsn2xeFvIIdsk0O"
    	],
    ]);

    $response = curl_exec($curl);
    $data = json_decode($response, true);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
    	echo "cURL Error #:" . $err;
    } else {
    	$result = $data['has_covid_symptoms'];
    }
  

}

?>
			
<div class="main-panel">
	<div class="content-wrapper">
          <div class="row">
		<div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Cek Gejala Covid - 19</h4>
              <p class="card-description">
                Ini adalah tes sederhana untuk pengecekan gejala covid - 19 menggunakan API yang terhubung ke machine learning.<br><br>Harap jawab semua pertanyaan untuk menentukan apakah anda terkena Covid-19 atau tidak.                    
              </p>
              <br>
              <form method=POST>
                <div class="form-group">
                  <label for="exampleInputUsername1">Daerah kamu tinggal</label>
                  <input type="text" name="daerah" class="form-control" id="exampleInputUsername1" placeholder="Contoh : Bandung" required>
                </div>
                <div class="form-group">
                  <label>Apa jenis kelamin kamu ?</label>
                  <select name="kelamin" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Saya perempuan</option>
                    <option value="0">Saya laki - laki</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu sakit kepala ?</label>
                  <select name="sakit_kepala" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, sakit kepala</option>
                    <option value="0">Tidak, kepala saya tidak sakit</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu baru pulang dari luar negeri ?</label>
                  <select name="pulang_luar_negeri" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, baru saja</option>
                    <option value="0">Tidak</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu baru saja berkontak dengan orang yang positif ?</label>
                  <select name="kontak_dengan_positif" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, minggu ini</option>
                    <option value="0">Tidak</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu sedang demam ?</label>
                  <select name="demam" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, saya sedang demam</option>
                    <option value="0">Tidak, saya tidak demam</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu batuk batuk ?</label>
                  <select name="batuk" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, saya sedang batuk - batuk</option>
                    <option value="0">Tidak, saya tidak batuk</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu berusia diatas 60 tahun ?</label>
                  <select name="usia_lanjut" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, saya berusia 60 tahun lebih</option>
                    <option value="0">Tidak, saya masih berusia dibawah 60 tahun</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Apakah kamu kesulitan bernafas ?</label>
                  <select name="sesak_nafas" class="form-control form-control-lg" required>
                    <option value="">Pilih Jawaban</option>
                    <option value="1">Ya, saya kesulitan bernafas</option>
                    <option value="0">Tidak, saya tidak kesulitan bernafas</option>
                  </select>
                </div>
                
                <button type="submit" name="cekgejala" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Hasil Pengecekan Gejala Covid - 19</h4>
              <p class="card-description">
                Data yang diberikan, bukanlah acuan. Harap periksakan diri anda ke satgas terdekat untuk informasi lebih lanjut.                  
                <br>
                <br>
                Berikut hasil diagnosa oleh sistem kami :
              </p>
              <?php
                if($result == "1") {
                    $curl = curl_init();

                    curl_setopt_array($curl, [
                    	CURLOPT_URL => "https://dekontaminasi.com/api/id/covid19/hospitals",
                    	CURLOPT_RETURNTRANSFER => true,
                    	CURLOPT_FOLLOWLOCATION => true,
                    	CURLOPT_ENCODING => "",
                    	CURLOPT_MAXREDIRS => 10,
                    	CURLOPT_TIMEOUT => 30,
                    	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    	CURLOPT_CUSTOMREQUEST => "GET",
                    ]);
                
                    $response2 = curl_exec($curl);
                    $data_rumah_sakit = json_decode($response2, true);
                    $err = curl_error($curl);
                
                    curl_close($curl);
                
                    if ($err) {
                    	echo "cURL Error #:" . $err;
                    } 
              ?>
              <div class="alert alert-danger">
                  <b>
                    Anda diduga terinfeksi virus covid-19
                  </b>
              </div>
              <p class="card-description">
                Untuk data lebih lanjut, anda dapat memeriksakan lebih lanjut ke fasilitas kesehatan dibawah ini :
              </p>
              <?php foreach($data_rumah_sakit as $d) {
                  if(strpos($d['region'], $daerah) !== false) {
                    echo "Nama    : ".$d['name']."<br>";
                    echo "Alamat  : ".$d['address']."<br>";
                    echo "Telepon : <a href='tel:".$d['phone']."'>".$d['phone']."</a><br><br>";
                  }
              }
              ?>
              <p class="alert alert-info">
                <b>
                Note : Jika tidak ada data rumah sakit yang ditampilkan, maka berarti kami belum memiliki data rumah sakit rujukan covid-19 di daerah anda.
                </b>
              </p>
              <?php
                } else if($result == "0") {
              ?>
              <div class="alert alert-success">
                  Anda tidak terinfeksi covid-19.
              </div>
              <p class="card-description">
                Untuk data lebih lanjut, anda dapat memeriksakan lebih lanjut ke fasilitas kesehatan terdekat.
              </p>
              <?php 
                } else {
              ?>
              <div class="alert alert-primary">
                  Mohon isi form untuk melihat hasil pemeriksaan!
              </div>
              <?php 
                }
              ?>
              
            </div>
           </div>
        </div>
      </div>		
	</div>
</div>