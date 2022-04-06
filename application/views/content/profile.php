<section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">profile</h2>
                    <h3 class="section-subheading text-uppercase text-muted">Selamat Datang Di Hotel Hali</h3>

                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td class="text-start" width="15%">email</td>
                                <td>:</td>
                                <td class="text-start"><?= $user['email'] ?></td>
                            </tr>
                            <tr>
                                <td class="text-start"width="15%">nama lengkap</td>
                                <td>:</td>
                                 <td class="text-start"><?= $user['nama_lengkap']?></td>
                            </tr> 
                             <tr>
                                <td class="text-start"width="15%">no_hp</td>
                                <td>:</td>
                                 <td class="text-start"><?= $user['no_hp'] ?></td>
                             </tr>             
                                                
    </tbody>
</table>
klik <a href="<?= base_url('index.php/profile/update_profile') ?>"> Disini</a>untuk update profile anda<br>
klik <a href=" <?= base_url('index.php/profile/ganti_password') ?>">Disini</a>untuk menganti password anda<br>




                </div>
            </div>
        </div>
</section>
