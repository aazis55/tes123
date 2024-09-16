
<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://vegaspools.biz/img/banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
        <div id="clock">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('H:i:s');
        ?>
    </div>
    <div id="date">
    <?php
        setlocale(LC_TIME, 'id_ID.utf8');
        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $tanggal = strftime('%d');
        $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $tahun = strftime('%Y');

        $nama_hari = $hari[date('w')];
        $nama_bulan = $bulan[date('n') - 1];

        echo $nama_hari . ', ' . $tanggal . ' ' . $nama_bulan . ' ' . $tahun;
        ?>
    </div>
      </div>
        <div class="carousel-item">
          <img src="https://vegaspools.biz/img/banner.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-caption d-none d-md-block">
        <div id="clock">
        <?php
        date_default_timezone_set('Asia/Jakarta');
        echo date('H:i:s');
        ?>
    </div>
    <div id="date">
    <?php
        setlocale(LC_TIME, 'id_ID.utf8');
        $hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
        $tanggal = strftime('%d');
        $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
        $tahun = strftime('%Y');

        $nama_hari = $hari[date('w')];
        $nama_bulan = $bulan[date('n') - 1];

        echo $nama_hari . ', ' . $tanggal . ' ' . $nama_bulan . ' ' . $tahun;
        ?>
    </div>
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    

    <div class="container" style="margin: 18px;">
      <h1 style="text-align: center;">Pasaran Togel Terpercaya Di Indonesia</h1>
    </div>

    
    
    <div class="container mt-2">
      <div class="row">
        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">12:15</td>
                    <td data-label="Buka">12:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '1') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">15:15</td>
                    <td data-label="Buka">15:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '2') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">18:15</td>
                    <td data-label="Buka">18:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '3') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>


        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">21:15</td>
                    <td data-label="Buka">21:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '4') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">22:15</td>
                    <td data-label="Buka">22:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '5') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>


        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/MACAO_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Macau Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">23:15</td>
                    <td data-label="Buka">23:30</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://macau-luck.com/api.php";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json, true);


              $counter = 0;   
              foreach (array_reverse($json_decoded) as $result){
                 
                if ($result['shift'] == '6') {
                  if($counter < 1){
                    echo $result['date'] . " = ";
                    echo $result['number']. "</br>";
                  }
                  $counter++;
                } } ?>
            </div>
          </div>
        </div>

        <!-- and Macau -->

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/SYDNEY77_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Sydney77 - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">12:45</td>
                    <td data-label="Buka">13:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
             <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'sydney7') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/TOKYO_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Tokyo - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">14:45</td>
                    <td data-label="Buka">15:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'tokyo') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/SHANGHAI_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Shanghai- Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">17:45</td>
                    <td data-label="Buka">18:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'shanghai') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>


        <div class="col-md-2">
          <div class="card border-success">
            <!-- <div class="card-header bg-transparent border-success" style="text-align: center;">London Pools</div> -->
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/LONDON_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">London Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">20:45</td>
                    <td data-label="Buka">21:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'london') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/HK_ONE_360x120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Hongkong - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">21:45</td>
                    <td data-label="Buka">22:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'hongkongOne') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>

        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/VEGAS_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Vegas Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">22:45</td>
                    <td data-label="Buka">23:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'vegas') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>


        <div class="row" style="place-content: center;">
        <div class="col-md-2">
          <div class="card border-success">
            <div class="card-body text-success">
              <img src="https://pool-assets.s3.ap-southeast-1.amazonaws.com/SINGAPORE88_360X120.png" width="120" alt="London">
            </div>
            <div class="card">
              <table class="table-responsive text-center mt-3">
                <thead>
                  <tr>
                    <td class="text-center table-provider" colspan="2">Singapore88 Pools - Setiap Hari</td>
                  </tr>
                  <tr>
                    <th>Tutup</th>
                    <th>Buka</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-label="Tutup">17:45</td>
                    <td data-label="Buka">18:00</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-transparent border-success">
              <?php
              $api = "https://p4.robotaset.com/pool/latest?lang=id";

              $json = file_get_contents($api);
              $json_decoded = json_decode($json,true);
             
              foreach ($json_decoded as $result){

                if ($result['label'] == 'singapore88') {

                  echo $result['date'] . " = ";
                  echo $result['number'];
                }

              }
              ?>
            </div>
          </div>
        </div>
        </div>

        

      </div>
    </div>

    <div class="container md-3">
      <h2 class="text-center">Pasaran Togel Terpercaya Yang Tersedia Di Indonesia</h2>
      <h3 class="text-center" style="font-color:primary;">Akan Diisi Intro Dari Semua Pasaran</h3>
      <!-- <h3 class="text-center" style="font-color:primary;">Pasaran Togel Online London Pools</h3>
      <p>Togel Online London Pools adalah wahana penuh keberuntungan yang membawa Anda ke petualangan taruhan yang menarik di tengah hiruk-pikuk kota London. Temukan sensasi taruhan yang mengasyikkan dan jajaki kemungkinan-kemungkinan kemenangan yang menantang di London Pools! Ayo bergabung dan rasakan pengalaman taruhan yang tak terlupakan di Togel Online London Pools.</p>
      <h3 class="text-center" style="font-color:primary;">Pasaran Togel Online Hongkong Pools</h3>
      <p>Togel Online Hongkong Pools adalah pintu gerbang menuju petualangan taruhan yang tidak terlupakan di tengah gemerlapnya kota Hong Kong. Dapatkan pengalaman taruhan yang seru dan penuh tantangan serta jelajahi dunia kesempatan menarik di setiap putarannya. </p>
      <h3 class="text-center" style="font-color:primary;">Pasaran Togel Online Macau Pools</h3>
      <p>Togel Online Macau Pools adalah platform taruhan yang menggabungkan keberuntungan dalam permainan togel dengan keseruan kolam renang virtual ala Macau. Di tengah arsitektur futuristik dan gemerlap lampu kota Macau, pengguna dapat merasakan sensasi berbeda ketika memasang taruhan sambil menikmati suasana mewah dari kolam renang online ini. Kesempatan untuk meraih kemenangan besar dan merilekskan diri di tengah kemegahan Macau ada di ujung jari Anda melalui Togel Online Macau Pools.</p>
      <h3 class="text-center" style="font-color:primary;">Pasaran Togel Vegas Pools</h3>
      <p>Togel Online Vegas Pools adalah arena taruhan online yang memadukan keseruan permainan togel dengan kemewahan gaya Vegas yang ikonik. Dengan latar belakang gemerlap lampu neon dan suasana kasino yang menggoda, pengguna dapat merasakan pengalaman berjudi yang seru sambil menikmati sensasi kolam renang virtual ala Vegas. Kesempatan untuk meraih keberuntungan besar dan merasakan kesenangan Vegas ada di ujung jari Anda melalui Togel Online Vegas Pools.</p>
      <h3 class="text-center" style="font-color:primary;">Pasaran Togel Online London Pools</h3>
      <p>Togel Online London Pools adalah tempat magis di mana angka-angka bersatu dengan keberuntungan, membawa Anda pada petualangan taruhan yang tidak terlupakan di jantung kota London. Menangkan kesempatan besar dan rasakan sensasi taruhan yang mendebarkan di setiap putaran. </p>
      <h3 class="text-center" style="font-color:primary;">Pasaran London Pools</h3>
      <p>London Pools adalah</p>
      <h3 class="text-center" style="font-color:primary;">Pasaran London Pools</h3>
      <p>London Pools adalah</p> -->
      <footer class="bg-dark">
        <p style="text-align: center;">copyright Gem188 &copy; <?php echo date("Y"); ?></p>
      </footer>

    </div>


    <script type="text/javascript">
      $(document).ready(function() {
        $('#myTable').DataTable({
          pageLength: 1,
          lengthMenu: [
            [1, 10, 25, 50, -1],
            [1, 10, 25, 50, "All"]
          ],

          columnDefs: [{
            target: 2,
            render: DataTable.render.datetime("dd-mm-Yyyy")
          }],
          order: [
            [2, 'desc']
          ]
        });
      });
    </script>
  </div>

