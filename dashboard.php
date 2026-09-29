<?php include 'includes/header.php'; ?>

<!-- Dashboard Start -->
<section class="dashboard_s1">
    <!-- Dashboard Buttons -->
    <div class="dashboard_s1left" role="tablist">
        <div class="dash_lefttitlebar">
            <label class="dash_leftlabel mobile_none">SIGNED IN AS</label>
            <h3 class="dash_lefttitle">Jane Smith</h3>
        </div>
        <div class="dash_tabbtnmain">
            <button type="button" class="dashboard_tabbtn active" data-bs-toggle="pill" data-bs-target="#tab1" role="tab">
                <p>Overview</p>
            </button>
            <button type="button" class="dashboard_tabbtn" data-bs-toggle="pill" data-bs-target="#tab2" role="tab">
                <p>Their library</p>
            </button>
            <button type="button" class="dashboard_tabbtn" data-bs-toggle="pill" data-bs-target="#tab3" role="tab">
                <p>Purchases</p>
            </button>
            <button type="button" class="dashboard_tabbtn" data-bs-toggle="pill" data-bs-target="#tab4" role="tab">
                <p>Settings</p>
            </button>
        </div>
        <button type="button" class="dashboard_tabbtn border-0 p-0">
            <p class="p-0 logout_p">Log out</p>
        </button>
    </div>
<!-- Dashboard Content -->
    <div class="dashboard_s1right">
        <div class="tab-content">
            <!-- OVERVIEW -->
            <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                <div class="dashboard_s1righinner">
                    <div class="tabcont_atop">
                        <label class="dash_contlabel">YOUR ACCOUNT</label>
                        <h2 class="dash_conttitle">Evening, Jane.</h2>
                    </div>
                    <div class="tabcont_amid1">
                        <div class="tabcont_amid1card w-100">
                            <label class="tabcont_amid1cardlabel">TOKENS LEFT</label>
                            <h1 class="tabcont_amid1cardtitle">5,650</h1>
                            <p class="tabcont_amid1cardsubtitle">Around 14 more storybooks</p>
                            <button type="button" class="btn dash_redbtn"><p>Top up</p></button>
                        </div>
                        <div class="tabcont_amid1card w-100">
                            <label class="tabcont_amid1cardlabel">BOOKS MADE</label>
                            <h1 class="tabcont_amid1cardtitle">12</h1>
                            <p class="tabcont_amid1cardsubtitle">Across two children</p>
                            <button type="button" class="btn dash_yellowbtn"><p>Start a book</p></button>
                        </div>
                    </div>
                    <div class="tabcont_amid2">
                        <h2 class="nopurchase_title">Made recently</h2>
                        <div class="overview_cardmain">
                            <div class="overview_card">
                                <img src="./img/dash_card1.png">
                                <h3 class="overview_cardtitle">The hero, fox and the dragon</h3>
                                <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                                </div>
                            </div>
                            <div class="overview_card">
                                <img src="./img/dash_card2.png">
                                <h3 class="overview_cardtitle">The quiet boat</h3>
                                <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                                </div>
                            </div>
                            <div class="overview_card">
                                <img src="./img/dash_card3.png">
                                <h3 class="overview_cardtitle">Nine ways to lose a hat</h3>
                                <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                                </div>
                            </div>
                            <div class="overview_card">
                                <img src="./img/dash_card4.png">
                                <h3 class="overview_cardtitle">Every puddle is a sea</h3>
                                <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="setting_tablemain overview_tablemain">
                        <div class="overview_tabletop">
                            <h3 class="overview_tabletitle">Recent receipts</h3>
                            <a class="overview_tablelink">See all purchases</a>
                        </div>
                        <div class="table-responsive mobile_none">
                            <table class="table invoice-table mb-0 setting_table">
                                <thead>
                                    <tr>
                                        <th scope="col">ORDER</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">PACK</th>
                                        <th scope="col">PAID</th>
                                        <th scope="col">INVOICE</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>TT-4821</td>
                                        <td>26 August 2026</td>
                                        <td>Silver and top up, 3,950 tokens</td>
                                        <td>$166.50</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>TT-4106</td>
                                        <td>2 June 2026</td>
                                        <td>Bronze, 1,000 tokens</td>
                                        <td>$50.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>TT-3752</td>
                                        <td>19 March 2026</td>
                                        <td>Gold, 4,500 tokens</td>
                                        <td>$200.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>TT-3390</td>
                                        <td>8 January 2026</td>
                                        <td>Bronze, 1,000 tokens</td>
                                        <td>$50.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="desktop_none">
                            <div class="mobile_overtablecardmain">
                                <div class="mobile_overtablecard">
                                    <div class="over_firstlast">
                                        <label class="over_mobcardlabel">TT-4821</label>
                                        <label class="over_mobcardlabel">26 August 2026</label>
                                    </div>
                                    <div class="over_firstlast">
                                        <p class="over_mobcardtitle">Silver pack and top up</p>
                                        <p class="over_mobcardtitle">$166.50</p>
                                    </div>
                                    <a class="download_mobover">Download</a>
                                </div>
                                <div class="mobile_overtablecard">
                                    <div class="over_firstlast">
                                        <label class="over_mobcardlabel">TT-4106</label>
                                        <label class="over_mobcardlabel">2 June 2026</label>
                                    </div>
                                    <div class="over_firstlast">
                                        <p class="over_mobcardtitle">Bronze pack</p>
                                        <p class="over_mobcardtitle">$50.00</p>
                                    </div>
                                    <a class="download_mobover">Download</a>
                                </div>
                                <div class="mobile_overtablecard">
                                    <div class="over_firstlast">
                                        <label class="over_mobcardlabel">TT-3752</label>
                                        <label class="over_mobcardlabel">19 March 2026</label>
                                    </div>
                                    <div class="over_firstlast">
                                        <p class="over_mobcardtitle">Gold pack</p>
                                        <p class="over_mobcardtitle">$200.00</p>
                                    </div>
                                    <a class="download_mobover">Download</a>
                                </div>
                                <div class="mobile_overtablecard">
                                    <div class="over_firstlast">
                                        <label class="over_mobcardlabel">TT-3390</label>
                                        <label class="over_mobcardlabel">8 January 2026</label>
                                    </div>
                                    <div class="over_firstlast">
                                        <p class="over_mobcardtitle">Bronze pack</p>
                                        <p class="over_mobcardtitle">$50.00</p>
                                    </div>
                                    <a class="download_mobover">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- LIBRARY -->
            <div class="tab-pane fade" id="tab2" role="tabpanel">
                <div class="dashboard_s1righinner">
                    <div class="tabcont_atop">
                        <label class="dash_contlabel">EVERY BOOK YOU HAVE MADE</label>
                        <h2 class="dash_conttitle">Their library.</h2>
                    </div>
                    <div class="library_cardbar">
                        <div class="library_card">
                            <img src="./img/dash_card1.png">
                            <h3 class="overview_cardtitle">The hero, fox and the dragon</h3>
                            <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                            </div>
                        </div>
                        <div class="library_card">
                            <img src="./img/dash_card2.png">
                            <h3 class="overview_cardtitle">The quiet boat</h3>
                            <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                            </div>
                        </div>
                        <div class="library_card">
                            <img src="./img/dash_card3.png">
                            <h3 class="overview_cardtitle">Nine ways to lose a hat</h3>
                            <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                            </div>
                        </div>
                        <div class="library_card">
                            <img src="./img/dash_card4.png">
                            <h3 class="overview_cardtitle">Every puddle is a sea</h3>
                            <div class="overview_btnbar">
                                <button type="button" class="btn dash_redbtn"><p>Read</p></button>
                                <button type="button" class="btn dash_yellowbtn"><p>Download</p></button>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination -->
                     <nav aria-label="Page navigation">
                        <ul class="pagination dash_pagination">
                            <li class="page-item">
                                <a class="page-link dash_pagebtn dash_previous" href="#">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link dash_pagebtn" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link dash_pagebtn" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link dash_pagebtn" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link dash_pagebtn dash_next" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                     <!-- NO PURCHASE -->
                     <div class="dash_nopurchase">
                        <h2 class="nopurchase_title">No books yet.</h2>
                        <p class="nopurchase_subtitle">The first one takes four answers: who it is for, the world, how it looks and how it sounds.</p>
                        <button type="button" class="btn dash_redbtn"><p>Write the first one</p></button>
                     </div>
                </div>
            </div>
            <!-- PURCHASES -->
            <div class="tab-pane fade" id="tab3" role="tabpanel">
                <div class="dashboard_s1righinner">
                    <div class="tabcont_atop">
                        <label class="dash_contlabel">ORDERS AND INVOICES</label>
                        <h2 class="dash_conttitle">Purchases.</h2>
                    </div>
                    <div class="setting_tablemain">
                        <div class="table_start">
                            <table class="table invoice-table mb-0 setting_table">
                                <thead>
                                    <tr>
                                        <th scope="col">DATE</th>
                                        <th scope="col">ORDER</th>
                                        <th scope="col">PACK</th>
                                        <th scope="col">PAID</th>
                                        <th scope="col">INVOICE</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>26 August 2026</td>
                                        <td>TT-4821</td>
                                        <td>Silver and top up, 3,950 tokens</td>
                                        <td>$166.50</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2 June 2026</td>
                                        <td>TT-4106</td>
                                        <td>Bronze, 1,000 tokens</td>
                                        <td>$50.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>19 March 2026</td>
                                        <td>TT-3752</td>
                                        <td>Gold, 4,500 tokens</td>
                                        <td>$200.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8 January 2026</td>
                                        <td>TT-3390</td>
                                        <td>Bronze, 1,000 tokens</td>
                                        <td>$50.00</td>
                                        <td>
                                            <a href="#" class="invoice-link">Download</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- NO PURCHASE -->
                     <div class="dash_nopurchase">
                        <h2 class="nopurchase_title">Nothing bought yet.</h2>
                        <p class="nopurchase_subtitle">When you buy a pack it lands here with its invoice, ready to download whenever you need it.</p>
                        <button type="button" class="btn dash_redbtn"><p>See the packs</p></button>
                     </div>
                </div>
            </div>
            <!-- SETTING -->
            <div class="tab-pane fade" id="tab4" role="tabpanel">
                <div class="dashboard_s1righinner">
                    <div class="tabcont_atop">
                        <label class="dash_contlabel">YOUR DETAILS</label>
                        <h2 class="dash_conttitle">Settings.</h2>
                    </div>
                    <div class="dash_settingmain">
                        <div class="dash_settingleft w-100">
                            <h3 class="dash_settingtitle">My details</h3>
                            <div class="dash_settingtextboxbar">
                                <label class="dash_settinglabel">Your name</label>
                                <input type="text" class="form-control dash_settingtextbox" placeholder="Jane Smith" required>
                                <div class="dash_settingerror">Add a name so the story knows who it is for.</div>
                            </div>
                            <div class="dash_settingtextboxbar">
                                <label class="dash_settinglabel">Email</label>
                                <input type="email" class="form-control dash_settingtextbox" placeholder="jane.smith@example.com" required>
                                <div class="dash_settingerror">Please enter your email address.</div>
                            </div>
                            <div class="dash_settingtextboxbar">
                                <label class="dash_settinglabel">Address</label>
                                <input type="text" class="form-control dash_settingtextbox" placeholder="" required>
                                <div class="dash_settingerror">Please enter your phone number.</div>
                            </div>
                            <div class="first_last">
                                <div class="dash_settingtextboxbar w-100">
                                    <label class="dash_settinglabel">City / town</label>
                                    <input type="text" class="form-control dash_settingtextbox" placeholder="" required>
                                    <div class="dash_settingerror">Please enter your phone number.</div>
                                </div>
                                <div class="dash_settingtextboxbar w-100">
                                    <label class="dash_settinglabel">Zip / postal code</label>
                                    <input type="text" class="form-control dash_settingtextbox" placeholder="" required>
                                    <div class="dash_settingerror">Please enter your phone number.</div>
                                </div>
                            </div>
                            <button type="button" class="btn dash_redbtn"><p>Save changes</p></button>
                        </div>
                        <div class="dash_settingright w-100">
                            <h3 class="dash_settingtitle">Your password</h3>
                            <div class="dash_settingtextboxbar">
                                <label class="dash_settinglabel">Current password</label>
                                <input type="password" class="form-control dash_settingtextbox" placeholder="At least eight characters" required>
                                <div class="dash_settingerror">Add a name so the story knows who it is for.</div>
                            </div>
                            <div class="dash_settingtextboxbar">
                                <label class="dash_settinglabel">New password</label>
                                <input type="password" class="form-control dash_settingtextbox" placeholder="At least eight characters" required>
                                <div class="dash_settingerror">Please enter your email address.</div>
                            </div>
                            <button type="button" class="btn dash_redbtn"><p>Change its</p></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Dashboard End -->

<?php include 'includes/footer.php'; ?>
