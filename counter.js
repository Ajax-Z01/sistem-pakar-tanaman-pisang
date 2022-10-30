// a = penyakit 1
// b = penyakit 2
// c = penyakit 3
// d = penyakit 4
// e = penyakit 5
// f = penyakit 6
// g = hama 1
// h = hama 2
// i = hama 3
// j = hama 4
// k = hama 5
var a = 0;
var b = 0;
var c = 0;
var d = 0;
var e = 0;
var f = 0;
var g = 0;
var h = 0;
var i = 0;
var j = 0;
var k = 0;

$(document).ready(function() {
    $('#start').click(function() {
        $('#start').hide();
        $('#gejala1').show();
    });
    $('#yes1').click(function() {
        a = a + 1;
        $('#gejala1').hide();
        $('#gejala2').show();
    });
    $('#no1').click(function() {
        $('#gejala1').hide();
        $('#gejala7').show();
    });
    $('#yes2').click(function() {
        a= a + 1;
        $('#gejala2').hide();
        $('#gejala3').show();
    });
    $('#no2').click(function() {
        $('#gejala2').hide();
        $('#gejala7').show();
    });
    $('#yes3').click(function() {
        a = a + 1;
        $('#gejala3').hide();
        $('#gejala4').show();
    });
    $('#no3').click(function() {
        $('#gejala3').hide();
        $('#gejala7').show();
    });
    $('#yes4').click(function() {
        a = a + 1;
        $('#gejala4').hide();
        $('#gejala5').show();
    });
    $('#no4').click(function() {
        $('#gejala4').hide();
        $('#gejala7').show();
    });
    $('#yes5').click(function() {
        a = a + 1;
        $('#gejala5').hide();
        $('#gejala6').show();
    });
    $('#no5').click(function() {
        $('#gejala5').hide();
        $('#gejala7').show();
    });
    $('#yes6').click(function() {
        a = a + 1;
        $('#gejala6').hide();
        $('#hasil').show();
    });
    $('#no6').click(function() {
        $('#gejala6').hide();
        $('#gejala7').show();
    });
    $('#yes7').click(function() {
        b = b + 1;
        $('#gejala7').hide();
        $('#gejala8').show();
    });
    $('#no7').click(function() {
        $('#gejala7').hide();
        $('#gejala11').show();
    });
    $('#yes8').click(function() {
        b = b + 1;
        $('#gejala8').hide();
        $('#gejala9').show();
    });
    $('#no8').click(function() {
        $('#gejala8').hide();
        $('#gejala11').show();
    });
    $('#yes9').click(function() {
        b = b + 1;
        $('#gejala9').hide();
        $('#gejala10').show();
    });
    $('#no9').click(function() {
        $('#gejala9').hide();
        $('#gejala11').show();
    });
    $('#yes10').click(function() {
        b = b + 1;
        $('#gejala10').hide();
        $('#hasil').show();
    });
    $('#no10').click(function() {
        $('#gejala10').hide();
        $('#gejala11').show();
    });
    $('#yes11').click(function() {
        c = c + 1;
        $('#gejala11').hide();
        $('#gejala12').show();
    });
    $('#no11').click(function() {
        $('#gejala11').hide();
        $('#gejala16').show();
    });
    $('#yes12').click(function() {
        c = c + 1;
        $('#gejala12').hide();
        $('#gejala13').show();
    });
    $('#no12').click(function() {
        $('#gejala12').hide();
        $('#gejala16').show();
    });
    $('#yes13').click(function() {
        c = c + 1;
        $('#gejala13').hide();
        $('#gejala14').show();
    });
    $('#no13').click(function() {
        $('#gejala13').hide();
        $('#gejala16').show();
    });
    $('#yes14').click(function() {
        c = c + 1;
        $('#gejala14').hide();
        $('#gejala15').show();
    });
    $('#no14').click(function() {
        $('#gejala14').hide();
        $('#gejala16').show();
    });
    $('#yes15').click(function() {
        c = c + 1;
        $('#gejala15').hide();
        $('#hasil').show();
    });
    $('#no15').click(function() {
        $('#gejala15').hide();
        $('#gejala16').show();
    });
    $('#yes16').click(function() {
        d = d + 1;
        $('#gejala16').hide();
        $('#gejala17').show();
    });
    $('#no16').click(function() {
        $('#gejala16').hide();
        $('#gejala21').show();
    });
    $('#yes17').click(function() {
        d = d + 1;
        $('#gejala17').hide();
        $('#gejala18').show();
    });
    $('#no17').click(function() {
        $('#gejala17').hide();
        $('#gejala21').show();
    });
    $('#yes18').click(function() {
        d = d + 1;
        $('#gejala18').hide();
        $('#gejala19').show();
    });
    $('#no18').click(function() {
        $('#gejala18').hide();
        $('#gejala21').show();
    });
    $('#yes19').click(function() {
        d = d + 1;
        $('#gejala19').hide();
        $('#gejala20').show();
    });
    $('#no19').click(function() {
        $('#gejala19').hide();
        $('#gejala21').show();
    });
    $('#yes20').click(function() {
        d = d + 1;
        $('#gejala20').hide();
        $('#hasil').show();
    });
    $('#no20').click(function() {
        $('#gejala20').hide();
        $('#gejala21').show();
    });
    $('#yes21').click(function() {
        e = e + 1;
        $('#gejala21').hide();
        $('#gejala22').show();
    });
    $('#no21').click(function() {
        $('#gejala21').hide();
        $('#gejala27').show();
    });
    $('#yes22').click(function() {
        e = e + 1;
        $('#gejala22').hide();
        $('#gejala23').show();
    });
    $('#no22').click(function() {
        $('#gejala22').hide();
        $('#gejala27').show();
    });
    $('#yes23').click(function() {
        e = e + 1;
        $('#gejala23').hide();
        $('#gejala24').show();
    });
    $('#no23').click(function() {
        $('#gejala23').hide();
        $('#gejala27').show();
    });
    $('#yes24').click(function() {
        e = e + 1;
        $('#gejala24').hide();
        $('#gejala25').show();
    });
    $('#no24').click(function() {
        $('#gejala24').hide();
        $('#gejala27').show();
    });
    $('#yes25').click(function() {
        e = e + 1;
        $('#gejala25').hide();
        $('#gejala26').show();
    });
    $('#no25').click(function() {
        $('#gejala25').hide();
        $('#gejala27').show();
    });
    $('#yes26').click(function() {
        e = e + 1;
        $('#gejala26').hide();
        $('#hasil').show();
    });
    $('#no26').click(function() {
        $('#gejala26').hide();
        $('#gejala27').show();
    });
    $('#yes27').click(function() {
        f = f + 1;
        $('#gejala27').hide();
        $('#gejala28').show();
    });
    $('#no27').click(function() {
        $('#gejala27').hide();
        $('#gejala32').show();
    });
    $('#yes28').click(function() {
        f = f + 1;
        $('#gejala28').hide();
        $('#gejala29').show();
    });
    $('#no28').click(function() {
        $('#gejala28').hide();
        $('#gejala32').show();
    });
    $('#yes29').click(function() {
        f = f + 1;
        $('#gejala29').hide();
        $('#gejala30').show();
    });
    $('#no29').click(function() {
        $('#gejala29').hide();
        $('#gejala32').show();
    });
    $('#yes30').click(function() {
        f = f + 1;
        $('#gejala30').hide();
        $('#gejala31').show();
    });
    $('#no30').click(function() {
        $('#gejala30').hide();
        $('#gejala32').show();
    });
    $('#yes31').click(function() {
        f = f + 1;
        $('#gejala31').hide();
        $('#hasil').show();
    });
    $('#no31').click(function() {
        $('#gejala31').hide();
        $('#gejala32').show();
    });
    $('#yes32').click(function() {
        g = g + 1;
        h = h + 1;
        k = k + 1;
        $('#gejala32').hide();
        $('#gejala33').show();
    });
    $('#no32').click(function() {
        $('#gejala32').hide();
        $('#gejala42').show();
    });
    $('#yes33').click(function() {
        g = g + 1;
        h = h + 1;
        k = k + 1;
        $('#gejala33').hide();
        $('#gejala34').show();
    });
    $('#no33').click(function() {
        $('#gejala33').hide();
        $('#gejala42').show();
    });
    $('#yes34').click(function() {
        g = g + 1;
        $('#gejala34').hide();
        $('#gejala35').show();
    });
    $('#no34').click(function() {
        $('#gejala34').hide();
        $('#gejala39').show();
    });
    $('#yes35').click(function() {
        g = g + 1;
        $('#gejala35').hide();
        $('#gejala36').show();
    });
    $('#no35').click(function() {
        $('#gejala35').hide();
        $('#gejala39').show();
    });
    $('#yes36').click(function() {
        g = g + 1;
        $('#gejala36').hide();
        $('#hasil').show();
    });
    $('#no36').click(function() {
        $('#gejala36').hide();
        $('#gejala39').show();
    });
    $('#yes39').click(function() {
        h = h + 1;
        $('#gejala39').hide();
        $('#gejala40').show();
    });
    $('#no39').click(function() {
        $('#gejala39').hide();
        $('#gejala51').show();
    });
    $('#yes40').click(function() {
        h = h + 1;
        $('#gejala40').hide();
        $('#gejala41').show();
    });
    $('#no40').click(function() {
        $('#gejala40').hide();
        $('#gejala42').show();
    });
    $('#yes41').click(function() {
        h = h + 1;
        $('#gejala41').hide();
        $('#hasil').show();
    });
    $('#no41').click(function() {
        $('#gejala41').hide();
        $('#gejala42').show();
    });
    $('#yes42').click(function() {
        i = i + 1;
        $('#gejala42').hide();
        $('#gejala43').show();
    });
    $('#no42').click(function() {
        $('#gejala42').hide();
        $('#gejala45').show();
    });
    $('#yes43').click(function() {
        i = i + 1;
        $('#gejala43').hide();
        $('#gejala44').show();
    });
    $('#no43').click(function() {
        $('#gejala43').hide();
        $('#gejala45').show();
    });
    $('#yes44').click(function() {
        i = i + 1;
        $('#gejala44').hide();
        $('#hasil').show();
    });
    $('#no44').click(function() {
        $('#gejala44').hide();
        $('#gejala45').show();
    });
    $('#yes45').click(function() {
        j = j + 1;
        $('#gejala45').hide();
        $('#gejala46').show();
    });
    $('#no45').click(function() {
        $('#gejala45').hide();
        $('#hasil').show();
    });
    $('#yes46').click(function() {
        j = j + 1;
        $('#gejala46').hide();
        $('#gejala47').show();
    });
    $('#no46').click(function() {
        $('#gejala46').hide();
        $('#hasil').show();
    });
    $('#yes47').click(function() {
        j = j + 1;
        $('#gejala47').hide();
        $('#gejala48').show();
    });
    $('#no47').click(function() {
        $('#gejala47').hide();
        $('#hasil').show();
    });
    $('#yes48').click(function() {
        j = j + 1;
        $('#gejala48').hide();
        $('#hasil').show();
    });
    $('#no48').click(function() {
        $('#gejala48').hide();
        $('#hasil').show();
    });
    $('#yes51').click(function() {
        k = k + 1;
        $('#gejala51').hide();
        $('#gelaja52').show();
    });
    $('#no51').click(function() {
        $('#gejala51').hide();
        $('#gejala42').show();
    });
    $('#yes52').click(function() {
        k = k + 1;
        $('#gejala52').hide();
        $('#gelaja53').show();
    });
    $('#no52').click(function() {
        $('#gejala52').hide();
        $('#gejala42').show();
    });
    $('#yes53').click(function() {
        k = k + 1;
        $('#gejala53').hide();
        $('#gejala42').show();
    });
    $('#no53').click(function() {
        $('#gejala53').hide();
        $('#gejala42').show();
    });

    $("#lihatHasil").click(function() {
        var P1 = a/6 * 100;
        var P2 = b/4 * 100;
        var P3 = c/5 * 100;
        var P4 = d/5 * 100;
        var P5 = e/6 * 100;
        var P6 = f/5 * 100;
        var H1 = g/5 * 100;
        var H2 = h/5 * 100;
        var H3 = i/3 * 100;
        var H4 = j/4 * 100;
        var H5 = k/5 * 100;
        if (P1 >= 60) {
            $('#hasil').hide();
            $('#hasil1').show();
        } else if (P2 >= 60) {
            $('#hasil').hide();
            $('#hasil2').show();
        } else if (P3 >= 60) {
            $('#hasil').hide();
            $('#hasil3').show();
        } else if (P4 >= 60) {
            $('#hasil').hide();
            $('#hasil4').show();
        } else if (P5 >= 60) {
            $('#hasil').hide();
            $('#hasil5').show();
        } else if (P6 >= 60) {
            $('#hasil').hide();
            $('#hasil6').show();
        } else if (H1 >= 60) {
            $('#hasil').hide();
            $('#hasil7').show();
        } else if (H2 >= 60) {
            $('#hasil').hide();
            $('#hasil8').show();
        } else if (H3 >= 60) {
            $('#hasil').hide();
            $('#hasil9').show();
        } else if (H4 >= 60) {
            $('#hasil').hide();
            $('#hasil10').show();
        } else if (H5 >= 60) {
            $('#hasil').hide();
            $('#hasil11').show();
        } else {
            $('#hasil').hide();
            $('#hasil12').show();
        }
    });
    
    $("#lihatsolusi1").click(function() {
        $('#hasil1').hide();
        $('#solusi1').show();
    });
    $("#lihatsolusi2").click(function() {
        $('#hasil2').hide();
        $('#solusi2').show();
    });
    $("#lihatsolusi3").click(function() {
        $('#hasil3').hide();
        $('#solusi3').show();
    });
    $("#lihatsolusi4").click(function() {
        $('#hasil4').hide();
        $('#solusi4').show();
    });
    $("#lihatsolusi5").click(function() {
        $('#hasil5').hide();
        $('#solusi5').show();
    });
    $("#lihatsolusi6").click(function() {
        $('#hasil6').hide();
        $('#solusi6').show();
    });
    $("#lihatsolusi7").click(function() {
        $('#hasil7').hide();
        $('#solusi7').show();
    });
    $("#lihatsolusi8").click(function() {
        $('#hasil8').hide();
        $('#solusi8').show();
    });
    $("#lihatsolusi9").click(function() {
        $('#hasil9').hide();
        $('#solusi9').show();
    });
    $("#lihatsolusi10").click(function() {  
        $('#hasil10').hide();
        $('#solusi10').show();
    });
    $("#lihatsolusi11").click(function() {
        $('#hasil11').hide();
        $('#solusi11').show();
    });
});

// Function to create the cookie
function createCookie(name, value, days) {
    var expires;
      
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
      
    document.cookie = escape(name) + "=" + 
        escape(value) + expires + "; path=/";
}