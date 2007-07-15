<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_block_streaming.html */ ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['block']['path']; ?>
/ufo.js"></script>
<p id="player2"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</p>
<script type="text/javascript">
	var FU = { 	movie:"<?php echo $this->_tpl_vars['block']['path']; ?>
/mediaplayer.swf",width:"170",height:"300",majorversion:"7",build:"0",bgcolor:"#FFFFFF",
				flashvars:"file=<?php echo $this->_tpl_vars['block']['path']; ?>
/includes/playlist.php&displayheight=175&repeat=true&lightcolor=0xCC9900&backcolor=0x000000&frontcolor=0xCCCCCC&overstretch=true" };
	UFO.create(	FU, "player2");
</script>