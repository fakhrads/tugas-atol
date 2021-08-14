<nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
              <li class="nav-item <?php if(!isset($_GET['content'])) {  ?>active<?php  } ?>">
                <a class="nav-link" href="<?php echo $cfg_baseurl; ?>/">
                  <i class="mdi mdi-file-document-box menu-icon"></i>
                  <span class="menu-title">Cek Kasus COVID-19</span>
                </a>
              </li>
              <li class="nav-item <?php if(isset($_GET['content'])) { if($_GET['content'] == "cekgejala") { ?>active<?php } } ?>">
                  <a href="?content=cekgejala" class="nav-link">
                    <i class="mdi mdi mdi-hospital menu-icon"></i>
                    <span class="menu-title">Cek Gejala COVID-19</span>
                  </a>
              </li>
              <li class="nav-item <?php if(isset($_GET['content'])) { if($_GET['content'] == "about") { ?>active<?php } } ?>">
                  <a href="?content=about" class="nav-link">
                    <i class="mdi mdi mdi-hospital menu-icon"></i>
                    <span class="menu-title">Tentang Pembuat</span>
                  </a>
              </li>
            </ul>
        </div>
      </nav>
    </div>