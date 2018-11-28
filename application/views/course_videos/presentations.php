<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_detail.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/course_videos.css">
<br>
<h2 style="text-align:center">Making Better Presentations</h2>
<div class="container">
    <div id="file" class="form-group resp-container">
        <iframe  class="resp-iframe" src="https://drive.google.com/file/d/1fH5rUwqtGtXSmPz11uocQcXaMGrNyj5x/preview" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
<br>
<div class="wrapper">
    <div class="timer-container" id="#run-the-timer">
        This button will be enabled in <span class="minute">10</span>:<span class="second">00</span>&nbsp;&nbsp;&nbsp;<input title="button will be enable soon" id="mybutton" disabled type="button" onclick="location.href = '<?php echo site_url() ?>/presentations_feedback_'" value=" Finish "/>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">&nbsp;<i style="color:black"class="fa fa-angle-double-up"></i>&nbsp;</button>
<br>

<div class="container " style="max-width: 800px; min-width: 200px; margin: auto;">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="accordion-group">
                    <div class="accordion-heading">
                        <a class="accordion-toggle"  data-toggle="collapse" data-parent="toggle" href="#collapseOne">
                            <i class="fa fa-pencil-square-o"></i> Topic study note
                        </a>
                    </div>
                    <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner"><br>
                            <div id="value" style="color: #4CAF50"></div>
                             <form name="submit">
                                <input hidden name="topicID" id="topicID" type="number" value="8">
                                <?php if(empty($notes->result())): ?>
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus></textarea>
                                <?php else: ?>
                                <?php foreach ($notes->result() as $note) { ?> 
                                <textarea id="description" name="description" name="textarea" style="margin-bottom: 10px; resize: none;color:black;" rows="4" cols="50" class="jqte-test form-control" placeholder="enter your chat" autofocus><?php echo $note->description ?></textarea>
                                    
                                <?php } ?>
                                <?php endif ?>
                                <input style="margin-top: 5px" name="submit" value="save" type="submit" class="btn-submit pull-right submit btn-info">
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div><br>
<div align="center">
    <i>
        <q>If you have an important point to make, don’t try to be subtle or clever. Use a pile driver. Hit the point once. <br>Then come back and hit it again. Then hit it a third time – a tremendous whack.</q>
    </i><br>
    - <b>Winston Churchill</b>
</div>



<!--Start script for button timer-->
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/button_timeout_enable.js"></script>
<script>
   function enable()
{
var x = document.getElementById("mybutton");

x.removeAttribute("disabled");
}

setTimeout("enable()", 6000);
    </script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/course_content_slider.js"></script>
<script type="text/javascript"  src="<?php echo base_url() ?>/assets/js/back_to_top.js"></script>
<script src="<?php echo base_url() ?>assets/js/success_message.js"></script>
