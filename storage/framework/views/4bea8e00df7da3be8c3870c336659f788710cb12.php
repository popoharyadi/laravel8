<?php $__env->startSection('banner'); ?>
    <section id="banner" class="major">
        <div class="inner">
            <header class="major">
                <h1>Angkringan Mas Soleh</h1>
            </header>
            <div class="content">
                <p>Macam - macam pilihannya, enak dan lezat</p>
                <ul class="actions">
                    <li><a href="#one" class="button next scrolly">Pilih Menu</a></li>
                </ul>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main_content'); ?>
    <div id="main">

        <!-- One -->
            <section id="one" class="tiles">
                <article>
                    <span class="image">
                        <img src="images/image-1.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Nasi</h3>

                        <p>PRICE FROM: <strong>Rp. 5000</strong></p>

                        <p>Pilihan : <br> <span>Nasi Kucing</span> | <span>Nasi Tahu Bacem</span> | <span>Nasi Kering Tempe</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-2.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Lauk pauk</h3>
                        <p>PRICE FROM: <strong>Rp. 1000</strong></p>
                        <p>Pilihan : <br> <span>Bacem</span> | <span>Bakso Bakar</span> | <span>Sosis</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
						</div>
					</header>
				</article>	
               <article>
                    <span class="image">
                        <img src="images/image-6.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Lauk Ayam</h3>
                        <p>PRICE FROM: <strong>Rp. 3000</strong></p>
                        <p>Pilihan : <br> <span>Kepala</span> | <span>Ati</span> | <span>Usus</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-6.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Minuman Panas</h3>
                        <p>PRICE FROM: <strong>Rp. 5000</strong></p>
                        <p>Pilihan : <br> <span>Kopi</span> | <span>Teh</span> | <span>Susu</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-6.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Minuman Dingin</h3>
                        <p>PRICE FROM: <strong>Rp. 5000</strong></p>
                        <p>Pilihan : <br> <span>Teh</span> | <span>Susu</span> | <span>Susu Jahe</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
                        </div>
                    </header>
                </article>
                <article>
                    <span class="image">
                        <img src="images/image-6.jpg" alt="" />
                    </span>
                    <header class="major">
                        <h3>Camilan</h3>
                        <p>PRICE FROM: <strong>Rp. 3000</strong></p>
                        <p>Pilihan : <br> <span>Tempura</span> | <span>Telur Puyuh</span> | <span>Fish Roll</span></p>

                        <div class="major-actions">
                            <a href="#contact" class="button small next scrolly">Pesen Sekarang</a>
                        </div>
                    </header>
                </article>
            </section>

        <!-- Two -->
            <section id="two">
                <div class="inner">
                    <header class="major">
                        <h2>About us</h2>
                    </header>
                    <p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet pharetra et feugiat tempus.</p>
                    <ul class="actions">
                        <li><a href="about.php" class="button next">Read more</a></li>
                    </ul>
                </div>
            </section>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section id="contact">
        <div class="inner">
            <section>
                <header class="major">
                    <h2>Pesan Sekarang</h2>
                </header>

                <form method="post" action="#">
                    <div class="fields">
                        <!--<div class="field half">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" />
                        </div>-->

                        <div class="field half">
                            <label for="vehicle-type">Pilih Nasi</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Nasi Kucing -</option>
                                <option value="1">Nasi Kucing</option>
                                <option value="2">Nasi Tahu Bacem</option>
                                <option value="3">Nasi Kering Tempe</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>

                        <div class="field half">
                            <label for="vehicle-type">Pilih Lauk Pauk</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Bacem -</option>
                                <option value="1">Bacem</option>
                                <option value="2">Bakso Bakar</option>
                                <option value="3">Sosis</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>
						

                        <div class="field half">
                            <label for="vehicle-type">Pilih Lauk Ayam</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Kepala Ayam -</option>
                                <option value="1">Kepala Ayam</option>
                                <option value="2">Ati</option>
                                <option value="3">Usus</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>
						
                        <div class="field half">
                            <label for="vehicle-type">Pilih Minuman Panas</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Kopi -</option>
                                <option value="1">Kopi</option>
                                <option value="2">Teh</option>
                                <option value="3">Susu</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>

                        <div class="field half">
                            <label for="vehicle-type">Pilih Minuman Dingin</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Teh -</option>
                                <option value="1">Teh</option>
                                <option value="2">Susu</option>
                                <option value="3">Susu Jahe</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>

                        <div class="field half">
                            <label for="vehicle-type">Pilih Camilan</label>

                            <select name="vehicle-type" id="vehicle-type">
                                <option value="">- Tempura -</option>
                                <option value="1">Tempura</option>
                                <option value="2">Telur Puyuh</option>
                                <option value="3">Fish Roll</option>
                            </select>
                        </div>

                        <div class="field half">
                            <label for="date-from">Jumlah</label>
                            <input type="text" name="date-from" id="date-from" />
                        </div>						
						
                        <!--<div class="field half">
                            <label for="date-to">Date to</label>
                            <input type="text" name="date-to" id="date-to" />
                        </div>

                        <div class="field">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" />
                        </div>

                        <div class="field half">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" />
                        </div>

                        <div class="field half">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" />
                        </div>-->

                        <div class="field">
                            <label for="message">Catatan</label>
                            <textarea name="message" id="message" rows="3"></textarea>
                        </div>

                        <!--<div class="field half">
                            <label for="captcha">Captcha</label>
                            <input type="text" name="captcha" id="captcha" />
                        </div>-->

                        <div class="field half text-right">
                            <label>&nbsp;</label>

                            <ul class="actions">
                                <li><input type="submit" value="Pesen" class="primary" /></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
            <section class="split">
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-envelope"></span>
                        <h3>Email</h3>
                        <a href="#">carrentalwebsite@untitled.tld</a>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-phone"></span>
                        <h3>Phone</h3>
                        <span>(000) 000-0000 x12387</span>
                        <br>
                        <span>(000) 000-0000 x12387</span>
                    </div>
                </section>
                <section>
                    <div class="contact-method">
                        <span class="icon alt fa-home"></span>
                        <h3>Address</h3>
                        <span>1234 Somewhere Road #5432<br />
                        Nashville, TN 00000<br />
                        United States of America</span>
                    </div>
                </section>
                <section>
                    <h3>Terms</h3>

                    <div class="box">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam magnam quasi molestiae quo repudiandae repellat dolore impedit alias soluta, excepturi aperiam aliquid numquam dignissimos nulla exercitationem vel, fuga accusamus voluptate, ipsa quia. Possimus odit ipsam deleniti nisi soluta voluptas! Nemo aperiam dignissimos, nisi. Necessitatibus cum quos dolor incidunt! Ab voluptatum sapiente voluptas fuga in rem voluptatibus rerum ipsam eos dolorem aspernatur saepe incidunt provident nihil, quos ad perspiciatis est voluptatem commodi. Repellat dolores, ipsam facere ipsum, cumque deleniti perferendis delectus consequatur harum fuga et architecto vitae neque suscipit. Aut vero architecto non maxime molestiae autem dolores, corporis, molestias esse voluptatum nobis error minima deserunt provident consectetur. Qui, ipsa assumenda voluptatum asperiores laudantium nobis harum sint quis sed quia, officiis odit eaque a! Quos provident eos earum facilis nam consequuntur reiciendis amet sunt? Quia, quasi sunt. Aliquam labore vitae, officiis ullam itaque. Id non est earum praesentium incidunt officia quos modi at suscipit quibusdam. Id nostrum beatae ea atque, fugiat mollitia, eius, sed eos quidem itaque inventore hic reiciendis quas doloremque illum. Enim eum labore odio alias. Consectetur molestias, suscipit, animi amet enim eius, voluptates nulla sapiente earum tenetur explicabo iusto ad officiis! Praesentium minus illo saepe voluptatibus obcaecati, excepturi, sit nam quaerat ab velit deserunt tenetur magni quae temporibus! Iusto sapiente iste eos, ipsa dolores obcaecati voluptas commodi, nesciunt officiis at quis magni quos, ducimus ad. Minus dicta blanditiis voluptatum ipsa, voluptatem sequi eligendi nam est possimus libero aliquam, eos provident repellendus dolores. Distinctio corrupti ea ipsam, dolore, dolorem similique eos illo iure ad maxime, cumque doloribus iusto expedita quidem accusantium cum, voluptatibus ducimus! Neque eos cupiditate at molestias sequi enim! Amet nesciunt dolorem quisquam sunt ad quos fugit at alias distinctio nihil nostrum, itaque a repudiandae soluta dicta quasi, repellat quidem autem. Architecto, esse porro iure repellat sed. Quidem?</p>
                    </div>
                </section>
            </section>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\app_jual3\resources\views/index.blade.php ENDPATH**/ ?>