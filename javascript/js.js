function $(Obj){return document.getElementById(Obj)}
function _(funcao,parametros){funcao(parametros)}
//----------BOX
mouse={x:0,y:0,o:'',oX:0,oY:0}
window.document.onmousemove=function(e){
	if(e==null)e=window.event;
	if(document.body&&mouse){
		mouse.x=e.clientX+document.body.scrollLeft
		mouse.y=e.clientY+document.body.scrollTop
		mouse.o=e.target||e.srcElement
		position=Position(mouse.o)
		mouse.oX=position.x
		mouse.oY=position.y
	}
	if(drag){
		dragObj.style.left=(mouse.x-clickX)+'px'
		dragObj.style.top=(mouse.y-clickY)+'px'
	}
}
seeing=''
function See(obj,show,move,hidesfather){
	if (seeing&&hidesfather)$(seeing).style.display='none'
	seeing=obj
	$(obj).style.display=!show?'none':'table'
	if(move){
		doc=document.documentElement
		objLeft=doc.scrollLeft==0?mouse.x:doc.clientWidth+doc.scrollLeft-$(obj).clientWidth
		objTop=doc.scrollTop==0?mouse.y:doc.clientHeight+doc.scrollTop-$(obj).clientHeight
		if(objLeft+$(obj).clientWidth>doc.clientWidth)objLeft-=$(obj).clientWidth
		if(objTop+$(obj).clientHeight>doc.clientHeight)objTop-=$(obj).clientHeight
		$(obj).style.left=objLeft+'px'
		$(obj).style.top=objTop+'px'
	}
}
function Position(obj){
	var offsetTrail=obj
	var offsetLeft=0
	var offsetTop=0
	while (offsetTrail){
		offsetLeft+=offsetTrail.offsetLeft
		offsetTop+=offsetTrail.offsetTop
		offsetTrail=offsetTrail.offsetParent
	}
	if (navigator.userAgent.indexOf("Mac")!=-1&&typeof document.body.leftMargin!="undefined"){
		offsetLeft+=document.body.leftMargin
		offsetTop+=document.body.topMargin
	}
	return {x:offsetLeft,y:offsetTop}
}
drag=false
dragObj={id:'',bkpIndex:0}
function Box(obj,title,content,orientation,width,height){
	if(obj){
		if(orientation){
			document.write("<table id='"+obj+"' "+(width?"width='"+width+"'":"")+' '+(height?"height='"+height+"'":"")+" class='box'><tr><th class='box' id='"+obj+"Bar' style='width:10px'></th>"+(title=title?"<td id='"+obj+"Title' class='box'>"+title+" </td>":"")+"<td colspan='2' id='"+obj+"Content' class='box' align='center'>"+(content?content:"")+"</td><td align='right' class='box'><input type='button' class='box' value='x' onclick=\"See('"+obj+"',false)\"></td></tr></table>")
		}else{
			document.write("<table "+(width?"width='"+width+"'":"")+' '+(height?"height='"+height+"'":"")+" id="+obj+" class='box'><tr height='20' id='"+obj+"Bar' class='box'><th id='"+obj+"Title' class='box' align='left'>"+(title=title?title:"<BR>")+"</th><th align=right class='box'><input type='button' class='box' value='x' onclick=\"See('"+obj+"',false)\"></td></tr><tr><td colspan='2' id='"+obj+"Content' class='box' align='center'>"+(content?content:"")+"</td></tr></table>")
		}
	}
	$(obj+"Bar").onmousedown=function(){
		dragObj=$(obj)
		drag=true
		position=Position(dragObj)
		clickX=mouse.x-position.x
		clickY=mouse.y-position.y
		document.body.focus();
		dragObj.bkpIndex=dragObj.style.zIndex
		dragObj.style.zIndex=1000
		dragObj.ondragstart=function(){return false}
		document.onselectstart=function(){return false}
	}
	$(obj+"Bar").onmouseup=function stop(){
		drag=false
		dragObj.style.zIndex=dragObj.bkpIndex
		document.onselectstart=function(){return false}
	}
	$(obj+"Bar").addEventListener('touchmove', function(event){
		var touch = event.targetTouches[0];
		$(obj).style.left=touch.pageX+'px'
		$(obj).style.top=touch.pageY+'px'
		event.preventDefault();
	}, false);
}