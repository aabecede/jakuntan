<style type="text/css">
	.search-page{
    font-size: 1.2em;
    font-weight: 700;
}

.search-top{
	border: 1px solid #dbdbdb;
padding: 10px;
height: 60px;
display: -ms-flexbox;
display: flex;
-ms-flex-align: center;
align-items: center;
-ms-flex-pack: justify;
justify-content: space-between;
background-color: #edefed;

}
.search-list{
padding: 0;
    margin: 0;
    list-style: none;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-result_item{
	padding: 0;
    margin: 0;
    list-style: none;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

.search-results_link {
    display: block;
    color: inherit;
}
.link {
    cursor: pointer;
}
a {
    color: #f89825;
    text-decoration: none;
}
a {
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card {
    width: 100%;
    padding: 0;
    border: 1px solid #dbdbdb;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0;
}
.card {
    display: inline-block;
    position: relative;
    padding: 10px;
    border-radius: 4px;
    background-color: #fff;
    -webkit-box-shadow: 0 2px 8px 0 rgba(0,0,0,.15);
    box-shadow: 0 2px 8px 0 rgba(0,0,0,.15);
    border: 1px solid hsla(0,0%,87%,.5);
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__main {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__main_left {
    width: 60%;
    text-align: left;
    margin-bottom: 0;
}
.search-card__main_left {
    padding: 10px 20px;
    margin-bottom: 20px;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__bio {
    margin-bottom: 1em;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__bio::after {
    clear: both;
}
.search-card__bio::after, .search-card__bio::before {
    content: "";
    display: table;
}

.search-card__profile-pic {
    float: left;
    margin-right: 20px;
    width: 33.333%;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

.search-card__img {
    width: 100%;
}
img {
    max-width: 100%;
    vertical-align: middle;
}
img {
    border-style: none;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__info {
    overflow: auto;
    word-wrap: break-word;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__name {
    margin: 0;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__info {
    word-wrap: break-word;
}
.search-card__label_list {
    margin-right: .5em;
}
b, strong {
    font-weight: inherit;
    font-weight: bolder;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__teaching-location {
    opacity: .8;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
.search-card__main_right {
    border-left: 1px solid #dbdbdb;
    width: 35%;
    margin-bottom: 0;
}
.search-card__main_right {
    text-align: center;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    margin-bottom: 20px;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

.search-card__fare {
    margin-bottom: 10px;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}

.search-card__rating {
    display: block;
    margin-bottom: 10px;
}
*, *::after, *::before {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}



    
</style>



<div class="row">
		<div class="container">
			<div class="search-top">
				<span class="search-page"><?php echo $_POST['cari'];?></span>
			</div>
			<ul class="search-list">
				<li class="search-result_item">
					<a href="#" class="search-result_link">
						<div class="card search-card">
							<div class="search-card__main">
								<div class="search-card__main_left">
									<div class="search-card__bio">
										<div class="search-card__profile-pic">
											<img src="<?php echo base_url('assets/images/fp1.jpg');?>" alt="">
										</div>
										<div class="search-card__info">
											<div class="search-card__name">
												Apemo
											</div>
											<div class="search-card__desc">
												Saya masih mahasiswa, sekarang kuliah di XYZ. Saya kuliah di Fakultas Ekonomi Jurusan Manajemen
											</div>
											<div class="search-card__location">
												<strong class="search-card__label_list">Asli Kota</strong><Br>
												<span class="search-card__teaching-location">Kediri</span>
											</div>
										</div>
									</div>
								</div>
								<div class="search-card__main_right">
									<div class="search-card__fare">
										<span>Mulai Dari</span>
										<h3>Rp 150.000,-</h3>
                                                                            <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:80%">
      4
    </div>
    
									</div>
                                    <h6>4.0 ( 25 Ulasan)</h6>
                                    
									
    
                           
                                    
								</div>
							</div>
						</div>
					</a>
				</li>
</Br>
</div>
</div>
