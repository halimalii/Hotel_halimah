<section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">profile</h2>
                    <h3 class="section-subheading text-uppercase text-muted">Selamat Datang Di Hotel Hali</h3>
                    <form action="<?=base_url('index.php/profile/proses_update_profile')?>"method="post">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td class="text-start" width="15%">email</td>
                                <td>:</td>
                                <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="text-start"width="15%">nama lengkap</td>
                                <td>:</td>
                                 <td class="text-start"><input class="form-control" type="text" name="nama_lengkap" value="<?= $user['nama_lengkap'] ?>"></td>
                            </tr> 
                             <tr>
                                <td class="text-start"width="15%">no hp</td>
                                <td>:</td>
                                 <td class="text-start"><input class="form-control" type="text" name="no_hp" value="<?= $user['no_hp'] ?>"></td>
                             </tr>  
                             <tr>
                                 <td colspan="3">
                                     <center><button type="submit" class="btn btn-primary">Update</button></center>
                                </td>
                             </tr>           
                                                
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
        </div>
</section>
