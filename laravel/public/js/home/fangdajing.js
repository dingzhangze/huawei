 
                var small = document.getElementById('small');

                var move = document.getElementById('move');

                var bigImg = document.getElementById('bigImg');

                var big = document.getElementById('big');

                var smallImg = document.getElementById('smallImg');

                small.onmousemove = function(e)
                {
                        move.style.visibility = 'visible'; 

                        big.style.display = 'block';
                        //获取x坐标
                        var x = e.pageX;
                        //获取y坐标
                        var y  = e.pageY;

                        //获取samll左偏移量
                        var ml = small.offsetLeft;
                        //获取small顶部的偏移量
                        var mt = small.offsetTop;

                        //获取move的宽度一半的距离
                        var mwh = move.offsetWidth/2;
                        //获取move的高度一半的距离
                        var mhh =move.offsetHeight/2;

                        var mll = x-ml-mwh;

                        var mhh = y-mt-mhh;

                        if(mll <= 0) {
                                mll = 0;
                        }

                        var maxl =  small.offsetWidth-move.offsetWidth;
                        if(mll >= maxl) {
                                mll = maxl;
                        }

                        if(mhh <= 0) {
                                mhh = 0;
                        }

                        var maxt = small.offsetHeight-move.offsetHeight;

                        if(mhh >= maxt) {

                                mhh = maxt;
                        }
                        move.style.left = mll+'px';

                        move.style.top = mhh+'px';

                        var bl = (mll/small.offsetWidth)*bigImg.offsetWidth;

                        var bt = (mhh/small.offsetHeight)*bigImg.offsetHeight;

                        bigImg.style.left = -bl+'px';

                        bigImg.style.top = -bt+'px';

                        //console.log(mhh);
                }

                //鼠标移除事件
                small.onmouseout = function()
                {
                        move.style.visibility= 'hidden';

                        big.style.display = 'none';
                }

                //单击事件
                var imgs =document.getElementById('uls').getElementsByTagName('img');

                for (var i = 0; i < imgs.length; i++) {
                        imgs[i].onclick =function()
                        {
                                smallImg.src = this.src;

                                bigImg.src = this.src;


                        }
                };


       