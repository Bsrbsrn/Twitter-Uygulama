$(document).ready(function(){
         
         
        // Twitter Kaç Dakika Önce Yazıldı
        function parseTwitterDate(tdate) {
        var system_date = new Date(Date.parse(tdate));
        var user_date = new Date();
        var diff = Math.floor((user_date - system_date) / 1000);
        if (diff &lt;= 1) {return &quot;şuan&quot;;}
        if (diff &lt; 20) {return diff + &quot; saniye önce&quot;;}
        if (diff &lt;= 3540) {return Math.round(diff / 60) + &quot; dakika önce&quot;;}
        if (diff &lt;= 5400) {return &quot;1 saat önce&quot;;}
        if (diff &lt;= 86400) {return Math.round(diff / 3600) + &quot; saat önce&quot;;}
        if (diff &lt;= 129600) {return &quot;1 gün önce&quot;;}
        if (diff &lt; 604800) {return Math.round(diff / 86400) + &quot; gün önce&quot;;}
        if (diff &lt;= 777600) {return &quot;1 hafta önce&quot;;}
        return &quot;on &quot; + system_date;
        }
        // End Twitter Kaç Dakika Önce Yazıldı
 
       // Twitter Username
       String.prototype.parseUsername = function() {
        return this.replace(/[@]+[A-Za-z0-9-_ÅŸÃ§Ã¶Ã¼ÄŸÄ±]+/gi, function(u) {
            var username = u.replace(&quot;@&quot;,&quot;&quot;)
            return u.link(&quot;http://twitter.com/&quot;+username);
         });
       };
       // End Twitter Username
 
      // Twitter hashtag
      String.prototype.parseHashtag = function() {
        return this.replace(/[#]+[A-Za-z0-9-_ÅŸÃ§Ã¶Ã¼ÄŸÄ±]+/gi, function(t) {
            var tag = t.replace(&quot;#&quot;,&quot;%23&quot;)
            return t.link(&quot;http://twitter.com/search?q=&quot;+tag);
        });
      };
     // End Twitter hashtag
         
  
 
   
    //Tweetleri Cek
    var $twitter = $('#twitter');
    //twitter.php dosyanızın tam yolunu alt kısma doğru şekilde yazmanız gerek. twitter.php yazan
    //kısımdan sonrasına dokunmayın.
   //username= kısmından sonraki yeri kendi twitter kullanıcı adınızla değiştirin.
    $.getJSON('twitter.php?username=bsrbaasrn&amp;count=5',function(data){
    var takipcisayisi = data.followers_count;
    $twitter.html('');
    for ( var i = 0; i &lt; data.length; i++){
        var date = data[i].created_at;
        var tweet = data[i].text;
        $twitter.append('&lt;div&gt;' + tweet.parseUsername().parseHashtag() + ' &lt;span&gt;(' + parseTwitterDate(date) + ')&lt;/span&gt;&lt;/div&gt;');
        }
    $twitter.find('div').filter(':not(:first)').hide();
    var e = 0;
    setInterval(function(){
        if ( e &lt; data.length - 1 ) e++;
        else e = 0;
        $twitter.find('div').hide()
        $twitter.find('div:eq('+e+')').fadeIn(900);
    }, 4000);
  })
  //End Tweetleri Cek
 
});