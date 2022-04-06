<section class="page-section bg-light" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-subheading text-uppercase">profile</h2>
                    <h3 class="section-subheading text-uppercase text-muted">Selamat Datang Di Hotel Hali</h3>
                    <form action="<?=base_url('index.php/profile/proses_ganti_password')?>"method="post">
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td class="text-start" width="15%">email</td>
                                <td>:</td>
                                <td class="text-start"><input class="form-control" type="text" name="email" value="<?= $user['email'] ?>" readonly></td>
                            </tr>
                            <tr>
                                <td class="text-start"width="15%">password</td>
                                <td>:</td>
                                 <td class="text-start"><input class="form-control" type="password" name="password1" value="<?= $user['password'] ?>"></td>
                            </tr> 
                             <tr>
                                <td class="text-start"width="15%">konfirasi password</td>
                                <td>:</td>
                                 <td class="text-start"><input class="form-control" type="password" name="password2" value="<?= $user['password'] ?>"></td>
                             </tr>  
                             <tr>
                                 <td colspan="3">
                                     <center><button type="submit" class="btn btn-primary">ganti</button></center>
                                </td>
                             </tr>           
                                                
                        </tbody>
                    </table>
                </form>
                </div>
            </div>
        </div>
</section>
