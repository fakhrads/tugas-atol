<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api.kawalcorona.com/indonesia",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
]);

$response = curl_exec($curl);
$data = json_decode($response, true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} 
?>
			
            <div class="main-panel">
				<div class="content-wrapper">
							<div class="row">
								<div class="col-lg-12">
                                    <div class="alert alert-warning">
                                        <div class="scrolling">
                                            <b>
                                                Selamat datang di situs cek gejala covid-19. Situs ini dibuat untuk memenuhi tugas besar mata kuliah Aplikasi Teknologi Online
                                            </b>
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-3 d-flex grid-margin stretch-card">
									<div class="card positif">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold"><?php echo $data[0]['positif']; ?></h2>
											<h4 class="card-title mb-2">Kasus Positif</h4>
											<small class="text-muted"><?php echo date("Y-m-d"); ?></small>
										</div>
									</div>
								</div>
								<div class="col-lg-3 d-flex grid-margin stretch-card">
									<div class="card sembuh">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold"><?php echo $data[0]['sembuh']; ?></h2>
											<h4 class="card-title mb-2">Kasus Sembuh</h4>
											<small class="text-muted"><?php echo date("Y-m-d"); ?></small>
										</div>
									</div>
								</div>
								<div class="col-lg-3 d-flex grid-margin stretch-card">
									<div class="card dirawat">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold"><?php echo $data[0]['dirawat']; ?></h2>
											<h4 class="card-title mb-2">Kasus Dirawat</h4>
											<small class="text-muted"><?php echo date("Y-m-d"); ?></small>
										</div>
									</div>
								</div>
								<div class="col-lg-3 d-flex grid-margin stretch-card">
									<div class="card meninggal">
										<div class="card-body">
											<h2 class="text-dark mb-2 font-weight-bold"><?php echo $data[0]['meninggal']; ?></h2>
											<h4 class="card-title mb-2">Kasus Meninggal</h4>
											<small class="text-muted"><?php echo date("Y-m-d"); ?></small>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 grid-margin d-flex stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex align-items-center justify-content-between">
												<h4 class="card-title mb-2">Tentang COVID-19</h4>
											</div>
											<div>
												<p class="mb-4">COVID-19 adalah nama dari penyakit yang disebabkan oleh virus severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) yang merupakan mutasi dari pendahulunya. COVID-19 cukup berbahaya dikarenakan penyebarannya yang sangat cepat sehingga COVID-19 dinyatakan sebagai pandemik oleh Organisasi Kesehatan Dunia (WHO).</p>                                              
                                                <a href="//www.dmca.com/Protection/Status.aspx?ID=02694eca-55f9-46f5-b525-46780cdf2259" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120n.png?ID=02694eca-55f9-46f5-b525-46780cdf2259"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>