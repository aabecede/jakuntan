 <style type="text/css">
    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: white;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}
img {
    border-style: none;
}
img {
    max-width: 100%;
    vertical-align: middle;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
} 
.img-verified{
	max-width: 100%;
	margin-top: 10px;
}
#img-verified{

	background-image: url(../../assets/images/bg-verified.png);
	height: auto;
	width: auto;
	color: white;
}
#pesan-header{
	
	 font-family: "Times New Roman", Georgia, Serif;
 
}
#thumbnail{
	border : 1px solid #ddd;
	border-radius: 4px;
	padding : 5px;
	height: auto;
	width: auto;
}
#thumbnail:hover{
	box-shadow: 0 0 2px 1px rgba(0, 140,186,0.5);
}
</style>
<!-- chat -->
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/chat.css') ?>">
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<!-- enc chat -->
<div class="row">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<div class="thumbnail">
							<img src="<?php echo base_url('assets/images/jakuntan/'.$Datadiri->foto);?>" class="img-thumbnail">
						</div>
					</div>
					<div class="col-md-8">
						<?php echo $Datadiri->username.'<br>'.$Datadiri->aboutme;?>
						<table class="table table-responsive">
							<tr>
								<td>Domisili</td>
								<td><?php echo $Datadiri->naprov.'<br>'.$Datadiri->nakab;?></td>
							</tr>
							<tr>
								<td>
									<?php 
									if(@$query->username == true)
									{
										?>
<a href="javascript:;" data-friend="<?= $Datadiri->id ?>"><img src="<?php echo base_url('assets/images/chat.png');?>" style="height: 30px;" title="Chat"></a>
										<?php

									}else{
										?>
										<a href="<?php echo base_url('Akuntan/chat/'.$Datadiri->id);?>"><img src="<?php echo base_url('assets/images/chat.png');?>" style="height: 30px;" title="Chat"></a>
										<?php
									}
									?>
									
								</td>
							</tr>
						</table>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tab">
								<button class="tablinks" onclick="openCity(event, 'Data Diri')" style="color: green">Data Diri</button>
						        <button class="tablinks" onclick="openCity(event, 'Pengalaman')" style="color: green">Pengalaman</button>
						        <button class="tablinks" onclick="openCity(event, 'Layanan')" style="color: green">Layanan</button>  
							</div>
							<!-- Pengalaman -->
							<div id="Data Diri" class="tabcontent">

							</div>
							<div id="Pengalaman" class="tabcontent">
								Pernah menerima Pesanan apa saja
							</div>
							<!-- layanan -->
							<div id="Layanan" class="tabcontent">
								<table class="table table-responsive">
										<tr>
											<th>Layanan</th>
											<th>Tarif</th>
										</tr>
								<?php
								
								foreach ($layanan as $serv) {
									echo '<tr>
											<td>'.$serv->nama.'</td>
											<td> Rp. '.number_format($serv->harga,0,',','.').'</td>
										</tr>
									';
								}
								?>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<table class="table" id="img-verified">
					<tr>
						<td><img src="<?php echo base_url('assets/images/');?>verified.png" class="img-verified"></td>
						<td>Akuntan ini sudah diverifikasi sesuai dengan standar pelayanan dari Jakuntan.com </td>
					</tr>
				</table>
				<div id="thumbnail">
					<h4 id="pesan-header"><b>PESAN AKUNTAN INI SEKARANG</b></h4>
					<h5><p class="blockquote">Cocok dengan akuntan ini ? Klik tombol dibawah ini</p></h5>
					<form method="post" enctype="multipart/form-data" action="<?php echo base_url('Akuntan/pesan/'.$Datadiri->id);?>" onclick="return pesan()">
							<input type="hidden" name="id" value="2">
							<button class="btn btn-warning form-control">Pesan Akuntan</button>
						</form>
				</div>
				
			</div>
		</div>
	</div>
</div>
<!-- TEMPLATE -->
<div id="wgt-container-template" style="display: none">
    <div class="msg-wgt-container">
        <div class="msg-wgt-header">
            <a href="javascript:;" class="online"></a>
            <a href="javascript:;" class="name"></a>
            <a href="javascript:;" class="close">x</a>
        </div>
        <div class="msg-wgt-message-container">
            <table width="100%" class="msg-wgt-message-list">
            </table>
        </div>
        <div class="msg-wgt-message-form">
            <textarea name="message" placeholder="Kirim Pesan . . ."></textarea>
        </div>
    </div>
</div>

<script type="text/x-template" id="msg-template" style="display: none">
    <tbody>
        <tr class="msg-wgt-message-list-header">
            <td rowspan="2">
            	<?php
            	if(@$query->foto == null)
            	{
            	?>
            	<img src="<?= base_url('assets/images/fp2.jpg') ?>">
            	<?php	
            	}else{
            		?>
            		<img src="<?= base_url('assets/images/'.$query->foto) ?>">
            		<?php
            	}
            	?>
            	
            </td>
            <td class="name"></td>
            <td class="time"></td>
        </tr>
        <tr class="msg-wgt-message-list-body">
            <td colspan="2"></td>
        </tr>
        <tr class="msg-wgt-message-list-separator"><td colspan="3"></td></tr>
    </tbody>
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    var chatPosition = [
        false, // 1
        false, // 2
        false, // 3
        false, // 4
        false, // 5
        false, // 6
        false, // 7
        false, // 8
        false, // 9
        false // 10
    ];

    // New chat
    $(document).on('click', 'a[data-friend]', function(e) {
        var $data = $(this).data();
        if ($data.friend !== undefined && chatPosition.indexOf($data.friend) < 0) {
            var posRight = 0;
            var position;
            for(var i in chatPosition) {
                if (chatPosition[i] == false) {
                    posRight = (i * 270) + 20;
                    chatPosition[i] = $data.friend;
                    position = i;
                    break;
                }
            }
            var tpl = $('#wgt-container-template').html();
            var tplBody = $('<div/>').append(tpl);
            tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
            tplBody.find('.msg-wgt-container').css('right', posRight + 'px');
            tplBody.find('.msg-wgt-container').attr('data-chat-position', position);
            tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
            $('body').append(tplBody.html());
            initializeChat();
        }
    });

    // Minimize Maximize
    $(document).on('click', '.msg-wgt-header > a.name', function() {
        var parent = $(this).parent().parent();
        if (parent.hasClass('minimize')) {
            parent.removeClass('minimize')
        } else {
            parent.addClass('minimize');
        }
    });

    // Close
    $(document).on('click', '.msg-wgt-header > a.close', function() {
        var parent = $(this).parent().parent();
        var $data = parent.data();
        parent.remove();
        chatPosition[$data.chatPosition] = false;
        setTimeout(function() {
            initializeChat();
        }, 1000)
    });

    var chatInterval = [];

    var initializeChat = function() {
        $.each(chatInterval, function(index, val) {
            clearInterval(chatInterval[index]);   
        });

        $('.msg-wgt-active').each(function(index, el) {
            var $data = $(this).data();
            var $that = $(this);
            var $container = $that.find('.msg-wgt-message-container');

            chatInterval.push(setInterval(function() {

                var oldscrollHeight = $container[0].scrollHeight;
                var oldLength = 0;
                $.post('<?= site_url('chat/getChats') ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    $that.find('a.name').text(data.name);
                    // from last
                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];

                        var tpl = $('#msg-template').html();
                        var tplBody = $('<div/>').append(tpl);
                        var id = (val.chat_id +'_'+ val.send_by +'_'+ val.send_to).toString();
                        

                        if ($that.find('#'+ id).length == 0) {
                            tplBody.find('tbody').attr('id', id); // set class
                            tplBody.find('td.name').text(val.name); // set name
                            tplBody.find('td.time').text(val.time); // set time
                            tplBody.find('.msg-wgt-message-list-body > td').html(nl2br(val.message)); // set message
                            $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message

                            //Auto-scroll
                            var newscrollHeight = $container[0].scrollHeight - 20; //Scroll height after the request
                            if (newIndex === 0) {
                                $container.animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }
                        }
                    });
                });
            }, 1000));

            $that.find('textarea').on('keydown', function(e) {
                var $textArea = $(this);
                if (e.keyCode === 13 && e.shiftKey === false) {
                    $.post('<?= site_url('chat/sendMessage') ?>', {message: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    });
                    $textArea.val(''); // clear input

                    e.preventDefault(); // stop 
                    return false;
                }
            });
        });
    }
    var nl2br = function(str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }


    // on load
    initializeChat();
});
</script>
<!--end template chat -->
<!-- function tab -->
<!-- jquery -->
<script>
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
} 
</script>