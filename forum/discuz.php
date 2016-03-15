<?php echo '薇晓朵网络工作室商业模板保护！请购买正版模板，http://www.Weixiaoduo.com/';exit;?>

<!--{template common/header}-->
<!--{if empty($gid)}-->
<style>
.temp {
margin: 0px;}
.pt1{margin:20px 0}
.pt1 .pt1_banner{float:left;width:625px}
.pt1 .pt1_banner .banner_img{float:left;width:415px;height:235px}
.pt1 .pt1_banner .pt1_banner_news{margin-left:415px;width:210px}
.pt1 .pt1_banner .slidebar div{border-bottom:1px solid #e3e3e6;padding:9px 10px 9px 15px;border-right:1px solid #e3e3e6;background:#fcfcff;width:185px;height: 40px;}
.pt1 .pt1_banner .slidebar div.on{background:#f2f2f5}
.pt1 .pt1_banner .slidebar div.on a{color:#0074CC;}
.pt1 .pt1_banner .slidebar div.on a:hover{color: #3E91F3;}
.pt1 .pt1_banner .slidebar div a{color:#979799;font:14px normal "Microsoft YaHei";font-family:"Microsoft Yahei"}
.pt1 .pt1_banner .slidebar div.on,.pt1 .pt1_banner .pt1_banner_news div:hover{border-right:3px solid #1b9bff}
.pt1 .pt1_banner .slidebar div.on .news{color:#0074cc}
.pt1 .pt1_banner .slidebar div:hover .news{color:#3e91f3 }
.pt1 .pt1_news{margin-left:650px}
.pt1 .pt1_news .pt1_news_1{border-bottom:1px dashed #e3e3e6;height:80px;overflow: hidden;}
.pt1 .pt1_news .pt1_news_1 h2,.pt1 .pt1_news .pt1_news_1 h2 a.link{font:bold 18px "Microsoft YaHei";margin-bottom:10px;color:#ff9900}
.pt1 .pt1_news .pt1_news_1 h2 a.link:hover{color:#ffb13b}
.pt1 .pt1_news .pt1_news_1 .text a.link{color:#999999;line-height:17px}
.pt1 .pt1_news .pt1_news_1 .text a.link:hover{color:#3e91f3 }
.pt1 .pt1_news .pt1_news_list{margin-top:10px}
.pt1 .pt1_news .pt1_news_list li{height:24px}
.pt1 .pt1_news .pt1_news_list li a{color:#666666;display:inline-block;height:24px;line-height:24px;float:left}
.pt1 .pt1_news .pt1_news_list li a:hover{color:#3e91f3}
.pt1 .pt1_news .pt1_news_list li a.area{width:75px}
.pt1 .pt1_news .pt1_news_list li a.content{width:270px}
.textoverflow{display:inline-block;white-space:nowrap;word-wrap:normal;word-break:break-all;overflow:hidden;text-overflow:ellipsis;max-width:100%;_width:100%}
</style>
<div class="pt1 cl">
    <div class="pt1_banner">
    	<!--[diy=diypt1]--><div id="diypt1" class="area"></div><!--[/diy]-->
    </div>
    <div class="pt1_news">
        <!--[diy=diyptnews1]--><div id="diyptnews1" class="area"></div><!--[/diy]-->
    </div>
</div>
<!--{/if}-->
<!--{if 0}-->
<div id="pt" class="bm cl">
	<!--{if empty($gid) && $announcements}-->
	<div class="y">
		<div id="an">
			<dl class="cl">
				<dt class="z xw1">{lang announcements}:&nbsp;</dt>
				<dd>
					<div id="anc"><ul id="ancl">$announcements</ul></div>
				</dd>
			</dl>
		</div>
		<script type="text/javascript">announcement();</script>
	</div>
	<!--{/if}-->
	<div class="z">
		<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a><em>&raquo;</em><a href="forum.php"{if $_G['setting']['forumjump']} id="fjump" onmouseover="delayShow(this, 'showForummenu($_G[fid])');" class="showmenu"{/if}>{$_G[setting][navs][2][navname]}</a>$navigation
	</div>
	<div class="z"><!--{hook/index_status_extra}--></div>
</div>
<!--{/if}-->

<!--{if empty($gid)}-->
	<!--{ad/text/wp a_t}-->
<!--{/if}-->

	<style id="diy_style" type="text/css"></style>

<!--{if empty($gid)}-->
	<div class="wp">
		<!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]-->
	</div>
<!--{/if}-->

<div id="ct" class="wp cl mtm{if $_G['setting']['forumallowside']} ct2{/if}">
	<!--{if empty($gid) && 0}-->
		<div id="chart" class="bm bw0 cl">
			<p class="chart z">{lang index_today}: <em>$todayposts</em><span class="pipe">|</span>{lang index_yesterday}: <em>$postdata[0]</em><span class="pipe">|</span>{lang index_posts}: <em>$posts</em><span class="pipe">|</span>{lang index_members}: <em>$_G['cache']['userstats']['totalmembers']</em><!--{if $_G['cache']['userstats']['newsetuser']}--><span class="pipe">|</span>{lang welcome_new_members}: <em><a href="home.php?mod=space&username={echo rawurlencode($_G['cache']['userstats']['newsetuser'])}" target="_blank" class="xi2">$_G['cache']['userstats']['newsetuser']</a></em><!--{/if}--></p>
			<div class="y">
				<!--{hook/index_nav_extra}-->
				<!--{if $_G['uid']}--><a href="forum.php?mod=guide&view=my" title="{lang my_posts}" class="xi2">{lang my_posts}</a><!--{/if}--><!--{if !empty($_G['setting']['search']['forum']['status'])}--><!--{if $_G['uid']}--><span class="pipe">|</span><!--{/if}--><a href="forum.php?mod=guide&view=new" title="{lang show_newthreads}" class="xi2">{lang show_newthreads}</a><!--{/if}-->
			</div>
		</div>
	<!--{/if}-->

	<div class="mn">
		<!--{hook/index_top}-->

		<!--{if !empty($_G['cache']['heats']['message'])}-->
			<div class="bm">
				<div class="bm_h cl">
					<h2>{lang hotthreads_forum}</h2>
				</div>
				<div class="bm_c cl">
					<div class="heat z">
						<!--{loop $_G['cache']['heats']['message'] $data}-->
							<dl class="xld">
								<dt><!--{if $_G['adminid'] == 1}--><a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a><!--{/if}-->
								<a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></dt>
								<dd>$data[message]</dd>
							</dl>
						<!--{/loop}-->
					</div>
					<ul class="xl xl1 heatl">
					<!--{loop $_G['cache']['heats']['subject'] $data}-->
						<li><!--{if $_G['adminid'] == 1}--><a class="d" href="forum.php?mod=misc&action=removeindexheats&tid=$data[tid]" onclick="return removeindexheats()">delete</a><!--{/if}-->&middot; <a href="forum.php?mod=viewthread&tid=$data[tid]" target="_blank" class="xi2">$data[subject]</a></li>
					<!--{/loop}-->
					</ul>
				</div>
			</div>
		<!--{/if}-->
		<div class="cl">
			<div class="z" style="width:738px;">
				<!--{hook/index_catlist_top}-->
				<div class="fl bm">
				<!--{if empty($gid) && !empty($forum_favlist)}-->
					<!--{eval $forumscount = count($forum_favlist);}-->
					<!--{eval $forumcolumns = $forumscount > 3 ? ($forumscount == 4 ? 4 : 5) : 1;}-->

					<!--{eval $forumcolwidth = (floor(100 / $forumcolumns) - 0.1).'%';}-->

					<div class="bm bmw {if $forumcolumns} flg{/if} cl">
						<div class="bm_h cl">
							<!--{if 0}--><span class="o">
								<img id="category_0_img" src="{IMGDIR}/$collapse['collapseimg_0']" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_0');" />
							</span><!--{/if}-->
							<h2><a href="home.php?mod=space&do=favorite&type=forum">{lang forum_myfav}</a></h2>
						</div>
						<div id="category_0" class="bm_c" style="{echo $collapse['category_0']}">
							<table cellspacing="0" cellpadding="0" class="fl_tb">
								<tr>
								<!--{eval $favorderid = 0;}-->
								<!--{loop $forum_favlist $key $favorite}-->
								<!--{if $favforumlist[$favorite[id]]}-->
								<!--{eval $forum=$favforumlist[$favorite[id]];}-->
								<!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
									<!--{if $forumcolumns>1}-->
										<!--{if $favorderid && ($favorderid % $forumcolumns == 0)}-->
											</tr>
											<!--{if $favorderid < $forumscount}-->
												<tr class="fl_row">
											<!--{/if}-->
										<!--{/if}-->
										<td class="fl_g"{if $forumcolwidth} width="$forumcolwidth"{/if}>
											<div class="fl_icn_g"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
											<!--{if $forum[icon]}-->
												$forum[icon]
											<!--{else}-->
												<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
											<!--{/if}-->
											</div>
											<dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
												<dt><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></dt>
												<!--{if empty($forum[redirect])}--><dd><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></dd><!--{/if}-->
												<dd>
												<!--{if $forum['permission'] == 1}-->
													{lang private_forum}
												<!--{else}-->
													<!--{if $forum['redirect']}-->
														<a href="$forumurl" class="xi2">{lang url_link}</a>
													<!--{elseif is_array($forum['lastpost'])}-->
														<!--{if $forumcolumns < 3}-->
															<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
														<!--{else}-->
															<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
														<!--{/if}-->
													<!--{else}-->
														{lang never}
													<!--{/if}-->
												<!--{/if}-->
												</dd>
												<!--{hook/index_favforum_extra $forum[fid]}-->
											</dl>
										</td>
										<!--{eval $favorderid++;}-->
									<!--{else}-->
										<td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
											<!--{if $forum[icon]}-->
												$forum[icon]
											<!--{else}-->
												<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
											<!--{/if}-->
										</td>
										<td>
											<h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></h2>
											<!--{if $forum[description]}--><p class="xg2">$forum[description]</p><!--{/if}-->
											<!--{if $forum['subforums']}--><p>{lang forum_subforums}: $forum['subforums']</p><!--{/if}-->
											<!--{if $forum['moderators']}--><p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p><!--{/if}-->
											<!--{hook/index_favforum_extra $forum[fid]}-->
										</td>
										<td class="fl_i">
											<!--{if empty($forum[redirect])}--><span class="xi2"><!--{echo dnumber($forum[threads])}--></span><span class="xg1"> / <!--{echo dnumber($forum[posts])}--></span><!--{/if}-->
										</td>
										<td class="fl_by">
											<div>
											<!--{if $forum['permission'] == 1}-->
												{lang private_forum}
											<!--{else}-->
												<!--{if $forum['redirect']}-->
													<a href="$forumurl" class="xi2">{lang url_link}</a>
												<!--{elseif is_array($forum['lastpost'])}-->
													<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
												<!--{else}-->
													{lang never}
												<!--{/if}-->
											<!--{/if}-->
											</div>
										</td>
									</tr>
									<tr class="fl_row">

									<!--{/if}-->
								<!--{/if}-->
								<!--{/loop}-->
								<!--{if ($columnspad = $favorderid % $forumcolumns) > 0}--><!--{echo str_repeat('<td class="fl_g"'.($forumcolwidth ? " width=\"$forumcolwidth\"" : '').'></td>', $forumcolumns - $columnspad);}--><!--{/if}-->
								</tr>
							</table>

						</div>
					</div>
					<!--{ad/intercat/bm a_c/-1}-->
				<!--{/if}-->
				<!--{loop $catlist $key $cat}-->
					<!--{hook/index_catlist $cat[fid]}-->
					<div class="bm bmw {if $cat['forumcolumns']} flg{/if} cl">
						<div class="bm_h cl">
							<!--{if 0}--><span class="o">
								<img id="category_$cat[fid]_img" src="{IMGDIR}/$cat[collapseimg]" title="{lang spread}" alt="{lang spread}" onclick="toggle_collapse('category_$cat[fid]');" />
							</span><!--{/if}-->
							<!--{if $cat['moderators']}--><span class="y">{lang forum_category_modedby}: $cat[moderators]</span><!--{/if}-->
							<!--{eval $caturl = !empty($cat['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$cat['domain'].'.'.$_G['setting']['domain']['root']['forum'] : '';}-->
							<h2><a href="{if !empty($caturl)}$caturl{else}forum.php?gid=$cat[fid]{/if}" style="{if $cat[extra][namecolor]}color: {$cat[extra][namecolor]};{/if}">$cat[name]</a></h2>
						</div>
						<div id="category_$cat[fid]" class="bm_c" style="{echo $collapse['category_'.$cat[fid]]}">
							<table cellspacing="0" cellpadding="0" class="fl_tb">
								<tr>
								<!--{loop $cat[forums] $forumid}-->
								<!--{eval $forum=$forumlist[$forumid];}-->
								<!--{eval $forumurl = !empty($forum['domain']) && !empty($_G['setting']['domain']['root']['forum']) ? 'http://'.$forum['domain'].'.'.$_G['setting']['domain']['root']['forum'] : 'forum.php?mod=forumdisplay&fid='.$forum['fid'];}-->
								<!--{if $cat['forumcolumns']}-->
									<!--{if $forum['orderid'] && ($forum['orderid'] % $cat['forumcolumns'] == 0)}-->
										</tr>
										<!--{if $forum['orderid'] < $cat['forumscount']}-->
											<tr class="fl_row">
										<!--{/if}-->
									<!--{/if}-->
									<td class="fl_g" width="$cat[forumcolwidth]">
										<div class="fl_icn_g"{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
										<!--{if $forum[icon]}-->
											$forum[icon]
										<!--{else}-->
											<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
										<!--{/if}-->
										</div>
										<dl{if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="margin-left: {$forum[extra][iconwidth]}px;"{/if}>
											<dt><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></dt>
											<!--{if empty($forum[redirect])}--><dd><em>{lang forum_threads}: <!--{echo dnumber($forum[threads])}--></em>, <em>{lang forum_posts}: <!--{echo dnumber($forum[posts])}--></em></dd><!--{/if}-->
											<dd>
											<!--{if $forum['permission'] == 1}-->
												{lang private_forum}
											<!--{else}-->
												<!--{if $forum['redirect']}-->
													<a href="$forumurl" class="xi2">{lang url_link}</a>
												<!--{elseif is_array($forum['lastpost'])}-->
													<!--{if $cat['forumcolumns'] < 3}-->
														<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
													<!--{else}-->
														<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost">{lang forum_lastpost}: $forum[lastpost][dateline]</a>
													<!--{/if}-->
												<!--{else}-->
													{lang never}
												<!--{/if}-->
											<!--{/if}-->
											</dd>
											<!--{hook/index_forum_extra $forum[fid]}-->
										</dl>
										<!--{if $forum['moderators']}--><p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p><!--{/if}-->
									</td>
								<!--{else}-->
									<td class="fl_icn" {if !empty($forum[extra][iconwidth]) && !empty($forum[icon])} style="width: {$forum[extra][iconwidth]}px;"{/if}>
										<!--{if $forum[icon]}-->
											$forum[icon]
										<!--{else}-->
											<a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
										<!--{/if}-->
									</td>
									<td>
										<h2><a href="$forumurl"{if $forum[redirect]} target="_blank"{/if}{if $forum[extra][namecolor]} style="color: {$forum[extra][namecolor]};"{/if}>$forum[name]</a><!--{if $forum[todayposts] && !$forum['redirect']}--><em class="xw0 xi1" title="{lang forum_todayposts}"> ($forum[todayposts])</em><!--{/if}--></h2>
										<!--{if $forum[description]}--><p class="xg2">$forum[description]</p><!--{/if}-->
										<!--{if $forum['subforums']}--><p>{lang forum_subforums}: $forum['subforums']</p><!--{/if}-->
										<!--{if $forum['moderators']}--><p>{lang forum_moderators}: <span class="xi2">$forum[moderators]</span></p><!--{/if}-->
										<!--{hook/index_forum_extra $forum[fid]}-->
									</td>
									<td class="fl_i">
										<!--{if empty($forum[redirect])}--><span class="xi2"><!--{echo dnumber($forum[threads])}--></span><span class="xg1"> / <!--{echo dnumber($forum[posts])}--></span><!--{/if}-->
									</td>
									<td class="fl_by">
										<div>
										<!--{if $forum['permission'] == 1}-->
											{lang private_forum}
										<!--{else}-->
											<!--{if $forum['redirect']}-->
												<a href="$forumurl" class="xi2">{lang url_link}</a>
											<!--{elseif is_array($forum['lastpost'])}-->
												<a href="forum.php?mod=redirect&tid=$forum[lastpost][tid]&goto=lastpost#lastpost" class="xi2"><!--{echo cutstr($forum[lastpost][subject], 30)}--></a> <cite>$forum[lastpost][dateline] <!--{if $forum['lastpost']['author']}-->$forum['lastpost']['author']<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--></cite>
											<!--{else}-->
												{lang never}
											<!--{/if}-->
										<!--{/if}-->
										</div>
									</td>
								</tr>
								<tr class="fl_row">
								<!--{/if}-->
								<!--{/loop}-->
								$cat['endrows']
								</tr>
							</table>
						</div>
					</div>
					<!--{ad/intercat/bm a_c/$cat[fid]}-->
				<!--{/loop}-->
				</div>
			</div>
			<!--{if empty($gid)}-->
				<div style="margin-left: 755px;border: 1px solid #DEDEDE;">
					<h3 class="dzr-title"><a href="##">腾讯云专家团</a></h3>
					<!--[diy=diyexpert]--><div id="diyexpert" class="area"></div><!--[/diy]-->
				</div>
			<!--{/if}-->
		</div>
		<!--{hook/index_middle}-->
		<div class="wp mtn">
			<!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]-->
		</div>

		<!--{if empty($gid) && $_G['setting']['whosonlinestatus']}-->
			<div id="online" class="bm oll">
				<div class="bm_h">
				<!--{if $detailstatus}-->
					<h3>
						<span>{lang onlinemember}</span>
						<span>- <strong>$onlinenum</strong> {lang onlines}
						- <strong>$membercount</strong> {lang index_members}(<strong>$invisiblecount</strong> {lang index_invisibles}),
						<strong>$guestcount</strong> {lang index_guests}
						- {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
					</h3>
				<!--{else}-->
					<!--{if empty($_G['setting']['sessionclose'])}-->
						<span class="o"><a href="forum.php?showoldetails=yes#online" title="{lang spread}"><img src="{IMGDIR}/collapsed_yes.gif" alt="{lang spread}" /></a></span>
					<!--{/if}-->
					<h3>
						<strong>
							<!--{if !empty($_G['setting']['whosonlinestatus'])}-->
								{lang onlinemember}
							<!--{else}-->
								<a href="home.php?mod=space&do=friend&view=online&type=member">{lang onlinemember}</a>
							<!--{/if}-->
						</strong>
						<span class="xs1">- {lang total} <strong>$onlinenum</strong> {lang onlines}
						<!--{if $membercount}-->- <strong>$membercount</strong> {lang index_members},<strong>$guestcount</strong> {lang index_guests}<!--{/if}-->
						- {lang index_mostonlines} <strong>$onlineinfo[0]</strong> {lang on} <strong>$onlineinfo[1]</strong>.</span>
					</h3>
				<!--{/if}-->
				</div>
			</div>
		<!--{/if}-->
<!--{if 0}-->
		<!--{if empty($gid) && ($_G['cache']['forumlinks'][0] || $_G['cache']['forumlinks'][1] || $_G['cache']['forumlinks'][2])}-->
		<div class="bm lk">
			<div id="category_lk" class="bm_c ptm">
				<!--{if $_G['cache']['forumlinks'][0]}-->
					<ul class="m mbn cl">$_G['cache']['forumlinks'][0]</ul>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][1]}-->
					<div class="mbn cl">
						$_G['cache']['forumlinks'][1]
					</div>
				<!--{/if}-->
				<!--{if $_G['cache']['forumlinks'][2]}-->
					<ul class="x mbm cl">
						$_G['cache']['forumlinks'][2]
					</ul>
				<!--{/if}-->
			</div>
		</div>
		<!--{/if}-->
<!--{/if}-->
		<!--{hook/index_bottom}-->
	</div>

	<!--{if $_G['setting']['forumallowside']}-->
		<div id="sd" class="sd">
			<!--{hook/index_side_top}-->
			<div class="drag">
				<!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]-->
			</div>
			<!--{hook/index_side_bottom}-->
		</div>
	<!--{/if}-->
</div>
<!--{if $_G['group']['radminid'] == 1}-->
	<!--{eval helper_manyou::checkupdate();}-->
<!--{/if}-->
<!--{template common/footer}-->
