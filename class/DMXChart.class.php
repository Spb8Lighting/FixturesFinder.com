<?php
class DMXChart
{
    private $_manufacturer;
    private $_fixture;
    private $_status;
    private $_evol;
    private $_lastdate;
    private $_mh = false;
    private $_mode;
    private $_channels;
    private $_wheel;
    private $_colorslots1;
    private $_colordetails1;
    private $_colorslots2;
    private $_colordetails2;
    private $_colorslots3;
    private $_colordetails3;
    private $_colorslots4;
    private $_colordetails4;
    private $_colorslots5;
    private $_colordetails5;
    private $_colorslots6;
    private $_colordetails6;
    private $_colorslots7;
    private $_colordetails7;
    private $_colorslots8;
    private $_colordetails8;
    private $_colorslots9;
    private $_colordetails9;
    private $_colorslots10;
    private $_colordetails10;
    private $_wheelcolor;
    private $_goboslots1;
    private $_gobodetails1;
    private $_goboslots2;
    private $_gobodetails2;
    private $_goboslots3;
    private $_gobodetails3;
    private $_goboslots4;
    private $_gobodetails4;
    private $_goboslots5;
    private $_gobodetails5;
    private $_goboslots6;
    private $_gobodetails6;
    private $_goboslots7;
    private $_gobodetails7;
    private $_goboslots8;
    private $_gobodetails8;
    private $_goboslots9;
    private $_gobodetails9;
    private $_goboslots10;
    private $_gobodetails10;
    private $_wheelgobo;
    private $_animationslots1;
    private $_animationdetails1;
    private $_animationslots2;
    private $_animationdetails2;
    private $_animationslots3;
    private $_animationdetails3;
    private $_animationslots4;
    private $_animationdetails4;
    private $_animationslots5;
    private $_animationdetails5;
    private $_animationslots6;
    private $_animationdetails6;
    private $_animationslots7;
    private $_animationdetails7;
    private $_animationslots8;
    private $_animationdetails8;
    private $_animationslots9;
    private $_animationdetails9;
    private $_animationslots10;
    private $_animationdetails10;
    private $_wheelanimation;
    private $_ch1;
    private $_ch1details;
    private $_ch2;
    private $_ch2details;
    private $_ch3;
    private $_ch3details;
    private $_ch4;
    private $_ch4details;
    private $_ch5;
    private $_ch5details;
    private $_ch6;
    private $_ch6details;
    private $_ch7;
    private $_ch7details;
    private $_ch8;
    private $_ch8details;
    private $_ch9;
    private $_ch9details;
    private $_ch10;
    private $_ch10details;
    private $_ch11;
    private $_ch11details;
    private $_ch12;
    private $_ch12details;
    private $_ch13;
    private $_ch13details;
    private $_ch14;
    private $_ch14details;
    private $_ch15;
    private $_ch15details;
    private $_ch16;
    private $_ch16details;
    private $_ch17;
    private $_ch17details;
    private $_ch18;
    private $_ch18details;
    private $_ch19;
    private $_ch19details;
    private $_ch20;
    private $_ch20details;
    private $_ch21;
    private $_ch21details;
    private $_ch22;
    private $_ch22details;
    private $_ch23;
    private $_ch23details;
    private $_ch24;
    private $_ch24details;
    private $_ch25;
    private $_ch25details;
    private $_ch26;
    private $_ch26details;
    private $_ch27;
    private $_ch27details;
    private $_ch28;
    private $_ch28details;
    private $_ch29;
    private $_ch29details;
    private $_ch30;
    private $_ch30details;
    private $_ch31;
    private $_ch31details;
    private $_ch32;
    private $_ch32details;
    private $_ch33;
    private $_ch33details;
    private $_ch34;
    private $_ch34details;
    private $_ch35;
    private $_ch35details;
    private $_ch36;
    private $_ch36details;
    private $_ch37;
    private $_ch37details;
    private $_ch38;
    private $_ch38details;
    private $_ch39;
    private $_ch39details;
    private $_ch40;
    private $_ch40details;
    private $_ch41;
    private $_ch41details;
    private $_ch42;
    private $_ch42details;
    private $_ch43;
    private $_ch43details;
    private $_ch44;
    private $_ch44details;
    private $_ch45;
    private $_ch45details;
    private $_ch46;
    private $_ch46details;
    private $_ch47;
    private $_ch47details;
    private $_ch48;
    private $_ch48details;
    private $_ch49;
    private $_ch49details;
    private $_ch50;
    private $_ch50details;
    private $_ch51;
    private $_ch51details;
    private $_ch52;
    private $_ch52details;
    private $_ch53;
    private $_ch53details;
    private $_ch54;
    private $_ch54details;
    private $_ch55;
    private $_ch55details;
    private $_ch56;
    private $_ch56details;
    private $_ch57;
    private $_ch57details;
    private $_ch58;
    private $_ch58details;
    private $_ch59;
    private $_ch59details;
    private $_ch60;
    private $_ch60details;
    private $_ch61;
    private $_ch61details;
    private $_ch62;
    private $_ch62details;
    private $_ch63;
    private $_ch63details;
    private $_ch64;
    private $_ch64details;
    private $_ch65;
    private $_ch65details;
    private $_ch66;
    private $_ch66details;
    private $_ch67;
    private $_ch67details;
    private $_ch68;
    private $_ch68details;
    private $_ch69;
    private $_ch69details;
    private $_ch70;
    private $_ch70details;
    private $_ch71;
    private $_ch71details;
    private $_ch72;
    private $_ch72details;
    private $_ch73;
    private $_ch73details;
    private $_ch74;
    private $_ch74details;
    private $_ch75;
    private $_ch75details;
    private $_ch76;
    private $_ch76details;
    private $_ch77;
    private $_ch77details;
    private $_ch78;
    private $_ch78details;
    private $_ch79;
    private $_ch79details;
    private $_ch80;
    private $_ch80details;
    private $_ch81;
    private $_ch81details;
    private $_ch82;
    private $_ch82details;
    private $_ch83;
    private $_ch83details;
    private $_ch84;
    private $_ch84details;
    private $_ch85;
    private $_ch85details;
    private $_ch86;
    private $_ch86details;
    private $_ch87;
    private $_ch87details;
    private $_ch88;
    private $_ch88details;
    private $_ch89;
    private $_ch89details;
    private $_ch90;
    private $_ch90details;
    private $_ch91;
    private $_ch91details;
    private $_ch92;
    private $_ch92details;
    private $_ch93;
    private $_ch93details;
    private $_ch94;
    private $_ch94details;
    private $_ch95;
    private $_ch95details;
    private $_ch96;
    private $_ch96details;
    private $_ch97;
    private $_ch97details;
    private $_ch98;
    private $_ch98details;
    private $_ch99;
    private $_ch99details;
    private $_ch100;
    private $_ch100details;
    private $_ch101;
    private $_ch101details;
    private $_ch102;
    private $_ch102details;
    private $_ch103;
    private $_ch103details;
    private $_ch104;
    private $_ch104details;
    private $_ch105;
    private $_ch105details;
    private $_ch106;
    private $_ch106details;
    private $_ch107;
    private $_ch107details;
    private $_ch108;
    private $_ch108details;
    private $_ch109;
    private $_ch109details;
    private $_ch110;
    private $_ch110details;
    private $_ch111;
    private $_ch111details;
    private $_ch112;
    private $_ch112details;
    private $_ch113;
    private $_ch113details;
    private $_ch114;
    private $_ch114details;
    private $_ch115;
    private $_ch115details;
    private $_ch116;
    private $_ch116details;
    private $_ch117;
    private $_ch117details;
    private $_ch118;
    private $_ch118details;
    private $_ch119;
    private $_ch119details;
    private $_ch120;
    private $_ch120details;
    private $_ch121;
    private $_ch121details;
    private $_ch122;
    private $_ch122details;
    private $_ch123;
    private $_ch123details;
    private $_ch124;
    private $_ch124details;
    private $_ch125;
    private $_ch125details;
    private $_ch126;
    private $_ch126details;
    private $_ch127;
    private $_ch127details;
    private $_ch128;
    private $_ch128details;
    private $_ch129;
    private $_ch129details;
    private $_ch130;
    private $_ch130details;
    private $_ch131;
    private $_ch131details;
    private $_ch132;
    private $_ch132details;
    private $_ch133;
    private $_ch133details;
    private $_ch134;
    private $_ch134details;
    private $_ch135;
    private $_ch135details;
    private $_ch136;
    private $_ch136details;
    private $_ch137;
    private $_ch137details;
    private $_ch138;
    private $_ch138details;
    private $_ch139;
    private $_ch139details;
    private $_ch140;
    private $_ch140details;
    private $_ch141;
    private $_ch141details;
    private $_ch142;
    private $_ch142details;
    private $_ch143;
    private $_ch143details;
    private $_ch144;
    private $_ch144details;
    private $_ch145;
    private $_ch145details;
    private $_ch146;
    private $_ch146details;
    private $_ch147;
    private $_ch147details;
    private $_ch148;
    private $_ch148details;
    private $_ch149;
    private $_ch149details;
    private $_ch150;
    private $_ch150details;
    private $_ch151;
    private $_ch151details;
    private $_ch152;
    private $_ch152details;
    private $_ch153;
    private $_ch153details;
    private $_ch154;
    private $_ch154details;
    private $_ch155;
    private $_ch155details;
    private $_ch156;
    private $_ch156details;
    private $_ch157;
    private $_ch157details;
    private $_ch158;
    private $_ch158details;
    private $_ch159;
    private $_ch159details;
    private $_ch160;
    private $_ch160details;
    private $_ch161;
    private $_ch161details;
    private $_ch162;
    private $_ch162details;
    private $_ch163;
    private $_ch163details;
    private $_ch164;
    private $_ch164details;
    private $_ch165;
    private $_ch165details;
    private $_ch166;
    private $_ch166details;
    private $_ch167;
    private $_ch167details;
    private $_ch168;
    private $_ch168details;
    private $_ch169;
    private $_ch169details;
    private $_ch170;
    private $_ch170details;
    private $_ch171;
    private $_ch171details;
    private $_ch172;
    private $_ch172details;
    private $_ch173;
    private $_ch173details;
    private $_ch174;
    private $_ch174details;
    private $_ch175;
    private $_ch175details;
    private $_ch176;
    private $_ch176details;
    private $_ch177;
    private $_ch177details;
    private $_ch178;
    private $_ch178details;
    private $_ch179;
    private $_ch179details;
    private $_ch180;
    private $_ch180details;
    private $_ch181;
    private $_ch181details;
    private $_ch182;
    private $_ch182details;
    private $_ch183;
    private $_ch183details;
    private $_ch184;
    private $_ch184details;
    private $_ch185;
    private $_ch185details;
    private $_ch186;
    private $_ch186details;
    private $_ch187;
    private $_ch187details;
    private $_ch188;
    private $_ch188details;
    private $_ch189;
    private $_ch189details;
    private $_ch190;
    private $_ch190details;
    private $_ch191;
    private $_ch191details;
    private $_ch192;
    private $_ch192details;
    private $_ch193;
    private $_ch193details;
    private $_ch194;
    private $_ch194details;
    private $_ch195;
    private $_ch195details;
    private $_ch196;
    private $_ch196details;
    private $_ch197;
    private $_ch197details;
    private $_ch198;
    private $_ch198details;
    private $_ch199;
    private $_ch199details;
    private $_ch200;
    private $_ch200details;
    private $_ch201;
    private $_ch201details;
    private $_ch202;
    private $_ch202details;
    private $_ch203;
    private $_ch203details;
    private $_ch204;
    private $_ch204details;
    private $_ch205;
    private $_ch205details;
    private $_ch206;
    private $_ch206details;
    private $_ch207;
    private $_ch207details;
    private $_ch208;
    private $_ch208details;
    private $_ch209;
    private $_ch209details;
    private $_ch210;
    private $_ch210details;
    private $_ch211;
    private $_ch211details;
    private $_ch212;
    private $_ch212details;
    private $_ch213;
    private $_ch213details;
    private $_ch214;
    private $_ch214details;
    private $_ch215;
    private $_ch215details;
    private $_ch216;
    private $_ch216details;
    private $_ch217;
    private $_ch217details;
    private $_ch218;
    private $_ch218details;
    private $_ch219;
    private $_ch219details;
    private $_ch220;
    private $_ch220details;
    private $_ch221;
    private $_ch221details;
    private $_ch222;
    private $_ch222details;
    private $_ch223;
    private $_ch223details;
    private $_ch224;
    private $_ch224details;
    private $_ch225;
    private $_ch225details;
    private $_ch226;
    private $_ch226details;
    private $_ch227;
    private $_ch227details;
    private $_ch228;
    private $_ch228details;
    private $_ch229;
    private $_ch229details;
    private $_ch230;
    private $_ch230details;
    private $_ch231;
    private $_ch231details;
    private $_ch232;
    private $_ch232details;
    private $_ch233;
    private $_ch233details;
    private $_ch234;
    private $_ch234details;
    private $_ch235;
    private $_ch235details;
    private $_ch236;
    private $_ch236details;
    private $_ch237;
    private $_ch237details;
    private $_ch238;
    private $_ch238details;
    private $_ch239;
    private $_ch239details;
    private $_ch240;
    private $_ch240details;
    private $_ch241;
    private $_ch241details;
    private $_ch242;
    private $_ch242details;
    private $_ch243;
    private $_ch243details;
    private $_ch244;
    private $_ch244details;
    private $_ch245;
    private $_ch245details;
    private $_ch246;
    private $_ch246details;
    private $_ch247;
    private $_ch247details;
    private $_ch248;
    private $_ch248details;
    private $_ch249;
    private $_ch249details;
    private $_ch250;
    private $_ch250details;
    private $_ch251;
    private $_ch251details;
    private $_ch252;
    private $_ch252details;
    private $_ch253;
    private $_ch253details;
    private $_ch254;
    private $_ch254details;
    private $_ch255;
    private $_ch255details;
    private $_ch256;
    private $_ch256details;
    private $_ch257;
    private $_ch257details;
    private $_ch258;
    private $_ch258details;
    private $_ch259;
    private $_ch259details;
    private $_ch260;
    private $_ch260details;
    private $_ch261;
    private $_ch261details;
    private $_ch262;
    private $_ch262details;
    private $_ch263;
    private $_ch263details;
    private $_ch264;
    private $_ch264details;
    private $_ch265;
    private $_ch265details;
    private $_ch266;
    private $_ch266details;
    private $_ch267;
    private $_ch267details;
    private $_ch268;
    private $_ch268details;
    private $_ch269;
    private $_ch269details;
    private $_ch270;
    private $_ch270details;
    private $_ch271;
    private $_ch271details;
    private $_ch272;
    private $_ch272details;
    private $_ch273;
    private $_ch273details;
    private $_ch274;
    private $_ch274details;
    private $_ch275;
    private $_ch275details;
    private $_ch276;
    private $_ch276details;
    private $_ch277;
    private $_ch277details;
    private $_ch278;
    private $_ch278details;
    private $_ch279;
    private $_ch279details;
    private $_ch280;
    private $_ch280details;
    private $_ch281;
    private $_ch281details;
    private $_ch282;
    private $_ch282details;
    private $_ch283;
    private $_ch283details;
    private $_ch284;
    private $_ch284details;
    private $_ch285;
    private $_ch285details;
    private $_ch286;
    private $_ch286details;
    private $_ch287;
    private $_ch287details;
    private $_ch288;
    private $_ch288details;
    private $_ch289;
    private $_ch289details;
    private $_ch290;
    private $_ch290details;
    private $_ch291;
    private $_ch291details;
    private $_ch292;
    private $_ch292details;
    private $_ch293;
    private $_ch293details;
    private $_ch294;
    private $_ch294details;
    private $_ch295;
    private $_ch295details;
    private $_ch296;
    private $_ch296details;
    private $_ch297;
    private $_ch297details;
    private $_ch298;
    private $_ch298details;
    private $_ch299;
    private $_ch299details;
    private $_ch300;
    private $_ch300details;
    private $_ch301;
    private $_ch301details;
    private $_ch302;
    private $_ch302details;
    private $_ch303;
    private $_ch303details;
    private $_ch304;
    private $_ch304details;
    private $_ch305;
    private $_ch305details;
    private $_ch306;
    private $_ch306details;
    private $_ch307;
    private $_ch307details;
    private $_ch308;
    private $_ch308details;
    private $_ch309;
    private $_ch309details;
    private $_ch310;
    private $_ch310details;
    private $_ch311;
    private $_ch311details;
    private $_ch312;
    private $_ch312details;
    private $_ch313;
    private $_ch313details;
    private $_ch314;
    private $_ch314details;
    private $_ch315;
    private $_ch315details;
    private $_ch316;
    private $_ch316details;
    private $_ch317;
    private $_ch317details;
    private $_ch318;
    private $_ch318details;
    private $_ch319;
    private $_ch319details;
    private $_ch320;
    private $_ch320details;
    private $_ch321;
    private $_ch321details;
    private $_ch322;
    private $_ch322details;
    private $_ch323;
    private $_ch323details;
    private $_ch324;
    private $_ch324details;
    private $_ch325;
    private $_ch325details;
    private $_ch326;
    private $_ch326details;
    private $_ch327;
    private $_ch327details;
    private $_ch328;
    private $_ch328details;
    private $_ch329;
    private $_ch329details;
    private $_ch330;
    private $_ch330details;
    private $_ch331;
    private $_ch331details;
    private $_ch332;
    private $_ch332details;
    private $_ch333;
    private $_ch333details;
    private $_ch334;
    private $_ch334details;
    private $_ch335;
    private $_ch335details;
    private $_ch336;
    private $_ch336details;
    private $_ch337;
    private $_ch337details;
    private $_ch338;
    private $_ch338details;
    private $_ch339;
    private $_ch339details;
    private $_ch340;
    private $_ch340details;
    private $_ch341;
    private $_ch341details;
    private $_ch342;
    private $_ch342details;
    private $_ch343;
    private $_ch343details;
    private $_ch344;
    private $_ch344details;
    private $_ch345;
    private $_ch345details;
    private $_ch346;
    private $_ch346details;
    private $_ch347;
    private $_ch347details;
    private $_ch348;
    private $_ch348details;
    private $_ch349;
    private $_ch349details;
    private $_ch350;
    private $_ch350details;
    private $_ch351;
    private $_ch351details;
    private $_ch352;
    private $_ch352details;
    private $_ch353;
    private $_ch353details;
    private $_ch354;
    private $_ch354details;
    private $_ch355;
    private $_ch355details;
    private $_ch356;
    private $_ch356details;
    private $_ch357;
    private $_ch357details;
    private $_ch358;
    private $_ch358details;
    private $_ch359;
    private $_ch359details;
    private $_ch360;
    private $_ch360details;
    private $_ch361;
    private $_ch361details;
    private $_ch362;
    private $_ch362details;
    private $_ch363;
    private $_ch363details;
    private $_ch364;
    private $_ch364details;
    private $_ch365;
    private $_ch365details;
    private $_ch366;
    private $_ch366details;
    private $_ch367;
    private $_ch367details;
    private $_ch368;
    private $_ch368details;
    private $_ch369;
    private $_ch369details;
    private $_ch370;
    private $_ch370details;
    private $_ch371;
    private $_ch371details;
    private $_ch372;
    private $_ch372details;
    private $_ch373;
    private $_ch373details;
    private $_ch374;
    private $_ch374details;
    private $_ch375;
    private $_ch375details;
    private $_ch376;
    private $_ch376details;
    private $_ch377;
    private $_ch377details;
    private $_ch378;
    private $_ch378details;
    private $_ch379;
    private $_ch379details;
    private $_ch380;
    private $_ch380details;
    private $_ch381;
    private $_ch381details;
    private $_ch382;
    private $_ch382details;
    private $_ch383;
    private $_ch383details;
    private $_ch384;
    private $_ch384details;
    private $_ch385;
    private $_ch385details;
    private $_ch386;
    private $_ch386details;
    private $_ch387;
    private $_ch387details;
    private $_ch388;
    private $_ch388details;
    private $_ch389;
    private $_ch389details;
    private $_ch390;
    private $_ch390details;
    private $_ch391;
    private $_ch391details;
    private $_ch392;
    private $_ch392details;
    private $_ch393;
    private $_ch393details;
    private $_ch394;
    private $_ch394details;
    private $_ch395;
    private $_ch395details;
    private $_ch396;
    private $_ch396details;
    private $_ch397;
    private $_ch397details;
    private $_ch398;
    private $_ch398details;
    private $_ch399;
    private $_ch399details;
    private $_ch400;
    private $_ch400details;
    private $_ch401;
    private $_ch401details;
    private $_ch402;
    private $_ch402details;
    private $_ch403;
    private $_ch403details;
    private $_ch404;
    private $_ch404details;
    private $_ch405;
    private $_ch405details;
    private $_ch406;
    private $_ch406details;
    private $_ch407;
    private $_ch407details;
    private $_ch408;
    private $_ch408details;
    private $_ch409;
    private $_ch409details;
    private $_ch410;
    private $_ch410details;
    private $_ch411;
    private $_ch411details;
    private $_ch412;
    private $_ch412details;
    private $_ch413;
    private $_ch413details;
    private $_ch414;
    private $_ch414details;
    private $_ch415;
    private $_ch415details;
    private $_ch416;
    private $_ch416details;
    private $_ch417;
    private $_ch417details;
    private $_ch418;
    private $_ch418details;
    private $_ch419;
    private $_ch419details;
    private $_ch420;
    private $_ch420details;
    private $_ch421;
    private $_ch421details;
    private $_ch422;
    private $_ch422details;
    private $_ch423;
    private $_ch423details;
    private $_ch424;
    private $_ch424details;
    private $_ch425;
    private $_ch425details;
    private $_ch426;
    private $_ch426details;
    private $_ch427;
    private $_ch427details;
    private $_ch428;
    private $_ch428details;
    private $_ch429;
    private $_ch429details;
    private $_ch430;
    private $_ch430details;
    private $_ch431;
    private $_ch431details;
    private $_ch432;
    private $_ch432details;
    private $_ch433;
    private $_ch433details;
    private $_ch434;
    private $_ch434details;
    private $_ch435;
    private $_ch435details;
    private $_ch436;
    private $_ch436details;
    private $_ch437;
    private $_ch437details;
    private $_ch438;
    private $_ch438details;
    private $_ch439;
    private $_ch439details;
    private $_ch440;
    private $_ch440details;
    private $_ch441;
    private $_ch441details;
    private $_ch442;
    private $_ch442details;
    private $_ch443;
    private $_ch443details;
    private $_ch444;
    private $_ch444details;
    private $_ch445;
    private $_ch445details;
    private $_ch446;
    private $_ch446details;
    private $_ch447;
    private $_ch447details;
    private $_ch448;
    private $_ch448details;
    private $_ch449;
    private $_ch449details;
    private $_ch450;
    private $_ch450details;
    private $_ch451;
    private $_ch451details;
    private $_ch452;
    private $_ch452details;
    private $_ch453;
    private $_ch453details;
    private $_ch454;
    private $_ch454details;
    private $_ch455;
    private $_ch455details;
    private $_ch456;
    private $_ch456details;
    private $_ch457;
    private $_ch457details;
    private $_ch458;
    private $_ch458details;
    private $_ch459;
    private $_ch459details;
    private $_ch460;
    private $_ch460details;
    private $_ch461;
    private $_ch461details;
    private $_ch462;
    private $_ch462details;
    private $_ch463;
    private $_ch463details;
    private $_ch464;
    private $_ch464details;
    private $_ch465;
    private $_ch465details;
    private $_ch466;
    private $_ch466details;
    private $_ch467;
    private $_ch467details;
    private $_ch468;
    private $_ch468details;
    private $_ch469;
    private $_ch469details;
    private $_ch470;
    private $_ch470details;
    private $_ch471;
    private $_ch471details;
    private $_ch472;
    private $_ch472details;
    private $_ch473;
    private $_ch473details;
    private $_ch474;
    private $_ch474details;
    private $_ch475;
    private $_ch475details;
    private $_ch476;
    private $_ch476details;
    private $_ch477;
    private $_ch477details;
    private $_ch478;
    private $_ch478details;
    private $_ch479;
    private $_ch479details;
    private $_ch480;
    private $_ch480details;
    private $_ch481;
    private $_ch481details;
    private $_ch482;
    private $_ch482details;
    private $_ch483;
    private $_ch483details;
    private $_ch484;
    private $_ch484details;
    private $_ch485;
    private $_ch485details;
    private $_ch486;
    private $_ch486details;
    private $_ch487;
    private $_ch487details;
    private $_ch488;
    private $_ch488details;
    private $_ch489;
    private $_ch489details;
    private $_ch490;
    private $_ch490details;
    private $_ch491;
    private $_ch491details;
    private $_ch492;
    private $_ch492details;
    private $_ch493;
    private $_ch493details;
    private $_ch494;
    private $_ch494details;
    private $_ch495;
    private $_ch495details;
    private $_ch496;
    private $_ch496details;
    private $_ch497;
    private $_ch497details;
    private $_ch498;
    private $_ch498details;
    private $_ch499;
    private $_ch499details;
    private $_ch500;
    private $_ch500details;
    private $_ch501;
    private $_ch501details;
    private $_ch502;
    private $_ch502details;
    private $_ch503;
    private $_ch503details;
    private $_ch504;
    private $_ch504details;
    private $_ch505;
    private $_ch505details;
    private $_ch506;
    private $_ch506details;
    private $_ch507;
    private $_ch507details;
    private $_ch508;
    private $_ch508details;
    private $_ch509;
    private $_ch509details;
    private $_ch510;
    private $_ch510details;
    private $_ch511;
    private $_ch511details;
    private $_ch512;
    private $_ch512details;

    public function __construct(array $datas)
    {
        $this->hydrate($datas);
    }

    # Hydrate
    public function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    # /Hydrate

    # Getters

    public function manufacturer()
    {return $this->_manufacturer;}
    public function fixture()
    {return $this->_fixture;}
    public function status()
    {return $this->_status;}
    public function evol()
    {return $this->_evol;}
    public function lastdate()
    {return $this->_lastdate;}
    public function mh()
    {return $this->_mh;}
    public function mode()
    {return $this->_mode;}
    public function channels()
    {return $this->_channels;}
    public function wheel()
    {return $this->_wheel;}
    public function colorslots1()
    {return $this->_colorslots1;}
    public function colordetails1()
    {return $this->_colordetails1;}
    public function colorslots2()
    {return $this->_colorslots2;}
    public function colordetails2()
    {return $this->_colordetails2;}
    public function colorslots3()
    {return $this->_colorslots3;}
    public function colordetails3()
    {return $this->_colordetails3;}
    public function colorslots4()
    {return $this->_colorslots4;}
    public function colordetails4()
    {return $this->_colordetails4;}
    public function colorslots5()
    {return $this->_colorslots5;}
    public function colordetails5()
    {return $this->_colordetails5;}
    public function colorslots6()
    {return $this->_colorslots6;}
    public function colordetails6()
    {return $this->_colordetails6;}
    public function colorslots7()
    {return $this->_colorslots7;}
    public function colordetails7()
    {return $this->_colordetails7;}
    public function colorslots8()
    {return $this->_colorslots8;}
    public function colordetails8()
    {return $this->_colordetails8;}
    public function colorslots9()
    {return $this->_colorslots9;}
    public function colordetails9()
    {return $this->_colordetails9;}
    public function colorslots10()
    {return $this->_colorslots10;}
    public function colordetails10()
    {return $this->_colordetails10;}
    public function wheelcolor()
    {return $this->_wheelcolor;}
    public function goboslots1()
    {return $this->_goboslots1;}
    public function gobodetails1()
    {return $this->_gobodetails1;}
    public function goboslots2()
    {return $this->_goboslots2;}
    public function gobodetails2()
    {return $this->_gobodetails2;}
    public function goboslots3()
    {return $this->_goboslots3;}
    public function gobodetails3()
    {return $this->_gobodetails3;}
    public function goboslots4()
    {return $this->_goboslots4;}
    public function gobodetails4()
    {return $this->_gobodetails4;}
    public function goboslots5()
    {return $this->_goboslots5;}
    public function gobodetails5()
    {return $this->_gobodetails5;}
    public function goboslots6()
    {return $this->_goboslots6;}
    public function gobodetails6()
    {return $this->_gobodetails6;}
    public function goboslots7()
    {return $this->_goboslots7;}
    public function gobodetails7()
    {return $this->_gobodetails7;}
    public function goboslots8()
    {return $this->_goboslots8;}
    public function gobodetails8()
    {return $this->_gobodetails8;}
    public function goboslots9()
    {return $this->_goboslots9;}
    public function gobodetails9()
    {return $this->_gobodetails9;}
    public function goboslots10()
    {return $this->_goboslots10;}
    public function gobodetails10()
    {return $this->_gobodetails10;}
    public function wheelgobo()
    {return $this->_wheelgobo;}
    public function animationslots1()
    {return $this->_animationslots1;}
    public function animationdetails1()
    {return $this->_animationdetails1;}
    public function animationslots2()
    {return $this->_animationslots2;}
    public function animationdetails2()
    {return $this->_animationdetails2;}
    public function animationslots3()
    {return $this->_animationslots3;}
    public function animationdetails3()
    {return $this->_animationdetails3;}
    public function animationslots4()
    {return $this->_animationslots4;}
    public function animationdetails4()
    {return $this->_animationdetails4;}
    public function animationslots5()
    {return $this->_animationslots5;}
    public function animationdetails5()
    {return $this->_animationdetails5;}
    public function animationslots6()
    {return $this->_animationslots6;}
    public function animationdetails6()
    {return $this->_animationdetails6;}
    public function animationslots7()
    {return $this->_animationslots7;}
    public function animationdetails7()
    {return $this->_animationdetails7;}
    public function animationslots8()
    {return $this->_animationslots8;}
    public function animationdetails8()
    {return $this->_animationdetails8;}
    public function animationslots9()
    {return $this->_animationslots9;}
    public function animationdetails9()
    {return $this->_animationdetails9;}
    public function animationslots10()
    {return $this->_animationslots10;}
    public function animationdetails10()
    {return $this->_animationdetails10;}
    public function wheelanimation()
    {return $this->_wheelanimation;}
    public function ch1()
    {return $this->_ch1;}
    public function ch1details()
    {return $this->_ch1details;}
    public function ch2()
    {return $this->_ch2;}
    public function ch2details()
    {return $this->_ch2details;}
    public function ch3()
    {return $this->_ch3;}
    public function ch3details()
    {return $this->_ch3details;}
    public function ch4()
    {return $this->_ch4;}
    public function ch4details()
    {return $this->_ch4details;}
    public function ch5()
    {return $this->_ch5;}
    public function ch5details()
    {return $this->_ch5details;}
    public function ch6()
    {return $this->_ch6;}
    public function ch6details()
    {return $this->_ch6details;}
    public function ch7()
    {return $this->_ch7;}
    public function ch7details()
    {return $this->_ch7details;}
    public function ch8()
    {return $this->_ch8;}
    public function ch8details()
    {return $this->_ch8details;}
    public function ch9()
    {return $this->_ch9;}
    public function ch9details()
    {return $this->_ch9details;}
    public function ch10()
    {return $this->_ch10;}
    public function ch10details()
    {return $this->_ch10details;}
    public function ch11()
    {return $this->_ch11;}
    public function ch11details()
    {return $this->_ch11details;}
    public function ch12()
    {return $this->_ch12;}
    public function ch12details()
    {return $this->_ch12details;}
    public function ch13()
    {return $this->_ch13;}
    public function ch13details()
    {return $this->_ch13details;}
    public function ch14()
    {return $this->_ch14;}
    public function ch14details()
    {return $this->_ch14details;}
    public function ch15()
    {return $this->_ch15;}
    public function ch15details()
    {return $this->_ch15details;}
    public function ch16()
    {return $this->_ch16;}
    public function ch16details()
    {return $this->_ch16details;}
    public function ch17()
    {return $this->_ch17;}
    public function ch17details()
    {return $this->_ch17details;}
    public function ch18()
    {return $this->_ch18;}
    public function ch18details()
    {return $this->_ch18details;}
    public function ch19()
    {return $this->_ch19;}
    public function ch19details()
    {return $this->_ch19details;}
    public function ch20()
    {return $this->_ch20;}
    public function ch20details()
    {return $this->_ch20details;}
    public function ch21()
    {return $this->_ch21;}
    public function ch21details()
    {return $this->_ch21details;}
    public function ch22()
    {return $this->_ch22;}
    public function ch22details()
    {return $this->_ch22details;}
    public function ch23()
    {return $this->_ch23;}
    public function ch23details()
    {return $this->_ch23details;}
    public function ch24()
    {return $this->_ch24;}
    public function ch24details()
    {return $this->_ch24details;}
    public function ch25()
    {return $this->_ch25;}
    public function ch25details()
    {return $this->_ch25details;}
    public function ch26()
    {return $this->_ch26;}
    public function ch26details()
    {return $this->_ch26details;}
    public function ch27()
    {return $this->_ch27;}
    public function ch27details()
    {return $this->_ch27details;}
    public function ch28()
    {return $this->_ch28;}
    public function ch28details()
    {return $this->_ch28details;}
    public function ch29()
    {return $this->_ch29;}
    public function ch29details()
    {return $this->_ch29details;}
    public function ch30()
    {return $this->_ch30;}
    public function ch30details()
    {return $this->_ch30details;}
    public function ch31()
    {return $this->_ch31;}
    public function ch31details()
    {return $this->_ch31details;}
    public function ch32()
    {return $this->_ch32;}
    public function ch32details()
    {return $this->_ch32details;}
    public function ch33()
    {return $this->_ch33;}
    public function ch33details()
    {return $this->_ch33details;}
    public function ch34()
    {return $this->_ch34;}
    public function ch34details()
    {return $this->_ch34details;}
    public function ch35()
    {return $this->_ch35;}
    public function ch35details()
    {return $this->_ch35details;}
    public function ch36()
    {return $this->_ch36;}
    public function ch36details()
    {return $this->_ch36details;}
    public function ch37()
    {return $this->_ch37;}
    public function ch37details()
    {return $this->_ch37details;}
    public function ch38()
    {return $this->_ch38;}
    public function ch38details()
    {return $this->_ch38details;}
    public function ch39()
    {return $this->_ch39;}
    public function ch39details()
    {return $this->_ch39details;}
    public function ch40()
    {return $this->_ch40;}
    public function ch40details()
    {return $this->_ch40details;}
    public function ch41()
    {return $this->_ch41;}
    public function ch41details()
    {return $this->_ch41details;}
    public function ch42()
    {return $this->_ch42;}
    public function ch42details()
    {return $this->_ch42details;}
    public function ch43()
    {return $this->_ch43;}
    public function ch43details()
    {return $this->_ch43details;}
    public function ch44()
    {return $this->_ch44;}
    public function ch44details()
    {return $this->_ch44details;}
    public function ch45()
    {return $this->_ch45;}
    public function ch45details()
    {return $this->_ch45details;}
    public function ch46()
    {return $this->_ch46;}
    public function ch46details()
    {return $this->_ch46details;}
    public function ch47()
    {return $this->_ch47;}
    public function ch47details()
    {return $this->_ch47details;}
    public function ch48()
    {return $this->_ch48;}
    public function ch48details()
    {return $this->_ch48details;}
    public function ch49()
    {return $this->_ch49;}
    public function ch49details()
    {return $this->_ch49details;}
    public function ch50()
    {return $this->_ch50;}
    public function ch50details()
    {return $this->_ch50details;}
    public function ch51()
    {return $this->_ch51;}
    public function ch51details()
    {return $this->_ch51details;}
    public function ch52()
    {return $this->_ch52;}
    public function ch52details()
    {return $this->_ch52details;}
    public function ch53()
    {return $this->_ch53;}
    public function ch53details()
    {return $this->_ch53details;}
    public function ch54()
    {return $this->_ch54;}
    public function ch54details()
    {return $this->_ch54details;}
    public function ch55()
    {return $this->_ch55;}
    public function ch55details()
    {return $this->_ch55details;}
    public function ch56()
    {return $this->_ch56;}
    public function ch56details()
    {return $this->_ch56details;}
    public function ch57()
    {return $this->_ch57;}
    public function ch57details()
    {return $this->_ch57details;}
    public function ch58()
    {return $this->_ch58;}
    public function ch58details()
    {return $this->_ch58details;}
    public function ch59()
    {return $this->_ch59;}
    public function ch59details()
    {return $this->_ch59details;}
    public function ch60()
    {return $this->_ch60;}
    public function ch60details()
    {return $this->_ch60details;}
    public function ch61()
    {return $this->_ch61;}
    public function ch61details()
    {return $this->_ch61details;}
    public function ch62()
    {return $this->_ch62;}
    public function ch62details()
    {return $this->_ch62details;}
    public function ch63()
    {return $this->_ch63;}
    public function ch63details()
    {return $this->_ch63details;}
    public function ch64()
    {return $this->_ch64;}
    public function ch64details()
    {return $this->_ch64details;}
    public function ch65()
    {return $this->_ch65;}
    public function ch65details()
    {return $this->_ch65details;}
    public function ch66()
    {return $this->_ch66;}
    public function ch66details()
    {return $this->_ch66details;}
    public function ch67()
    {return $this->_ch67;}
    public function ch67details()
    {return $this->_ch67details;}
    public function ch68()
    {return $this->_ch68;}
    public function ch68details()
    {return $this->_ch68details;}
    public function ch69()
    {return $this->_ch69;}
    public function ch69details()
    {return $this->_ch69details;}
    public function ch70()
    {return $this->_ch70;}
    public function ch70details()
    {return $this->_ch70details;}
    public function ch71()
    {return $this->_ch71;}
    public function ch71details()
    {return $this->_ch71details;}
    public function ch72()
    {return $this->_ch72;}
    public function ch72details()
    {return $this->_ch72details;}
    public function ch73()
    {return $this->_ch73;}
    public function ch73details()
    {return $this->_ch73details;}
    public function ch74()
    {return $this->_ch74;}
    public function ch74details()
    {return $this->_ch74details;}
    public function ch75()
    {return $this->_ch75;}
    public function ch75details()
    {return $this->_ch75details;}
    public function ch76()
    {return $this->_ch76;}
    public function ch76details()
    {return $this->_ch76details;}
    public function ch77()
    {return $this->_ch77;}
    public function ch77details()
    {return $this->_ch77details;}
    public function ch78()
    {return $this->_ch78;}
    public function ch78details()
    {return $this->_ch78details;}
    public function ch79()
    {return $this->_ch79;}
    public function ch79details()
    {return $this->_ch79details;}
    public function ch80()
    {return $this->_ch80;}
    public function ch80details()
    {return $this->_ch80details;}
    public function ch81()
    {return $this->_ch81;}
    public function ch81details()
    {return $this->_ch81details;}
    public function ch82()
    {return $this->_ch82;}
    public function ch82details()
    {return $this->_ch82details;}
    public function ch83()
    {return $this->_ch83;}
    public function ch83details()
    {return $this->_ch83details;}
    public function ch84()
    {return $this->_ch84;}
    public function ch84details()
    {return $this->_ch84details;}
    public function ch85()
    {return $this->_ch85;}
    public function ch85details()
    {return $this->_ch85details;}
    public function ch86()
    {return $this->_ch86;}
    public function ch86details()
    {return $this->_ch86details;}
    public function ch87()
    {return $this->_ch87;}
    public function ch87details()
    {return $this->_ch87details;}
    public function ch88()
    {return $this->_ch88;}
    public function ch88details()
    {return $this->_ch88details;}
    public function ch89()
    {return $this->_ch89;}
    public function ch89details()
    {return $this->_ch89details;}
    public function ch90()
    {return $this->_ch90;}
    public function ch90details()
    {return $this->_ch90details;}
    public function ch91()
    {return $this->_ch91;}
    public function ch91details()
    {return $this->_ch91details;}
    public function ch92()
    {return $this->_ch92;}
    public function ch92details()
    {return $this->_ch92details;}
    public function ch93()
    {return $this->_ch93;}
    public function ch93details()
    {return $this->_ch93details;}
    public function ch94()
    {return $this->_ch94;}
    public function ch94details()
    {return $this->_ch94details;}
    public function ch95()
    {return $this->_ch95;}
    public function ch95details()
    {return $this->_ch95details;}
    public function ch96()
    {return $this->_ch96;}
    public function ch96details()
    {return $this->_ch96details;}
    public function ch97()
    {return $this->_ch97;}
    public function ch97details()
    {return $this->_ch97details;}
    public function ch98()
    {return $this->_ch98;}
    public function ch98details()
    {return $this->_ch98details;}
    public function ch99()
    {return $this->_ch99;}
    public function ch99details()
    {return $this->_ch99details;}
    public function ch100()
    {return $this->_ch100;}
    public function ch100details()
    {return $this->_ch100details;}
    public function ch101()
    {return $this->_ch101;}
    public function ch101details()
    {return $this->_ch101details;}
    public function ch102()
    {return $this->_ch102;}
    public function ch102details()
    {return $this->_ch102details;}
    public function ch103()
    {return $this->_ch103;}
    public function ch103details()
    {return $this->_ch103details;}
    public function ch104()
    {return $this->_ch104;}
    public function ch104details()
    {return $this->_ch104details;}
    public function ch105()
    {return $this->_ch105;}
    public function ch105details()
    {return $this->_ch105details;}
    public function ch106()
    {return $this->_ch106;}
    public function ch106details()
    {return $this->_ch106details;}
    public function ch107()
    {return $this->_ch107;}
    public function ch107details()
    {return $this->_ch107details;}
    public function ch108()
    {return $this->_ch108;}
    public function ch108details()
    {return $this->_ch108details;}
    public function ch109()
    {return $this->_ch109;}
    public function ch109details()
    {return $this->_ch109details;}
    public function ch110()
    {return $this->_ch110;}
    public function ch110details()
    {return $this->_ch110details;}
    public function ch111()
    {return $this->_ch111;}
    public function ch111details()
    {return $this->_ch111details;}
    public function ch112()
    {return $this->_ch112;}
    public function ch112details()
    {return $this->_ch112details;}
    public function ch113()
    {return $this->_ch113;}
    public function ch113details()
    {return $this->_ch113details;}
    public function ch114()
    {return $this->_ch114;}
    public function ch114details()
    {return $this->_ch114details;}
    public function ch115()
    {return $this->_ch115;}
    public function ch115details()
    {return $this->_ch115details;}
    public function ch116()
    {return $this->_ch116;}
    public function ch116details()
    {return $this->_ch116details;}
    public function ch117()
    {return $this->_ch117;}
    public function ch117details()
    {return $this->_ch117details;}
    public function ch118()
    {return $this->_ch118;}
    public function ch118details()
    {return $this->_ch118details;}
    public function ch119()
    {return $this->_ch119;}
    public function ch119details()
    {return $this->_ch119details;}
    public function ch120()
    {return $this->_ch120;}
    public function ch120details()
    {return $this->_ch120details;}
    public function ch121()
    {return $this->_ch121;}
    public function ch121details()
    {return $this->_ch121details;}
    public function ch122()
    {return $this->_ch122;}
    public function ch122details()
    {return $this->_ch122details;}
    public function ch123()
    {return $this->_ch123;}
    public function ch123details()
    {return $this->_ch123details;}
    public function ch124()
    {return $this->_ch124;}
    public function ch124details()
    {return $this->_ch124details;}
    public function ch125()
    {return $this->_ch125;}
    public function ch125details()
    {return $this->_ch125details;}
    public function ch126()
    {return $this->_ch126;}
    public function ch126details()
    {return $this->_ch126details;}
    public function ch127()
    {return $this->_ch127;}
    public function ch127details()
    {return $this->_ch127details;}
    public function ch128()
    {return $this->_ch128;}
    public function ch128details()
    {return $this->_ch128details;}
    public function ch129()
    {return $this->_ch129;}
    public function ch129details()
    {return $this->_ch129details;}
    public function ch130()
    {return $this->_ch130;}
    public function ch130details()
    {return $this->_ch130details;}
    public function ch131()
    {return $this->_ch131;}
    public function ch131details()
    {return $this->_ch131details;}
    public function ch132()
    {return $this->_ch132;}
    public function ch132details()
    {return $this->_ch132details;}
    public function ch133()
    {return $this->_ch133;}
    public function ch133details()
    {return $this->_ch133details;}
    public function ch134()
    {return $this->_ch134;}
    public function ch134details()
    {return $this->_ch134details;}
    public function ch135()
    {return $this->_ch135;}
    public function ch135details()
    {return $this->_ch135details;}
    public function ch136()
    {return $this->_ch136;}
    public function ch136details()
    {return $this->_ch136details;}
    public function ch137()
    {return $this->_ch137;}
    public function ch137details()
    {return $this->_ch137details;}
    public function ch138()
    {return $this->_ch138;}
    public function ch138details()
    {return $this->_ch138details;}
    public function ch139()
    {return $this->_ch139;}
    public function ch139details()
    {return $this->_ch139details;}
    public function ch140()
    {return $this->_ch140;}
    public function ch140details()
    {return $this->_ch140details;}
    public function ch141()
    {return $this->_ch141;}
    public function ch141details()
    {return $this->_ch141details;}
    public function ch142()
    {return $this->_ch142;}
    public function ch142details()
    {return $this->_ch142details;}
    public function ch143()
    {return $this->_ch143;}
    public function ch143details()
    {return $this->_ch143details;}
    public function ch144()
    {return $this->_ch144;}
    public function ch144details()
    {return $this->_ch144details;}
    public function ch145()
    {return $this->_ch145;}
    public function ch145details()
    {return $this->_ch145details;}
    public function ch146()
    {return $this->_ch146;}
    public function ch146details()
    {return $this->_ch146details;}
    public function ch147()
    {return $this->_ch147;}
    public function ch147details()
    {return $this->_ch147details;}
    public function ch148()
    {return $this->_ch148;}
    public function ch148details()
    {return $this->_ch148details;}
    public function ch149()
    {return $this->_ch149;}
    public function ch149details()
    {return $this->_ch149details;}
    public function ch150()
    {return $this->_ch150;}
    public function ch150details()
    {return $this->_ch150details;}
    public function ch151()
    {return $this->_ch151;}
    public function ch151details()
    {return $this->_ch151details;}
    public function ch152()
    {return $this->_ch152;}
    public function ch152details()
    {return $this->_ch152details;}
    public function ch153()
    {return $this->_ch153;}
    public function ch153details()
    {return $this->_ch153details;}
    public function ch154()
    {return $this->_ch154;}
    public function ch154details()
    {return $this->_ch154details;}
    public function ch155()
    {return $this->_ch155;}
    public function ch155details()
    {return $this->_ch155details;}
    public function ch156()
    {return $this->_ch156;}
    public function ch156details()
    {return $this->_ch156details;}
    public function ch157()
    {return $this->_ch157;}
    public function ch157details()
    {return $this->_ch157details;}
    public function ch158()
    {return $this->_ch158;}
    public function ch158details()
    {return $this->_ch158details;}
    public function ch159()
    {return $this->_ch159;}
    public function ch159details()
    {return $this->_ch159details;}
    public function ch160()
    {return $this->_ch160;}
    public function ch160details()
    {return $this->_ch160details;}
    public function ch161()
    {return $this->_ch161;}
    public function ch161details()
    {return $this->_ch161details;}
    public function ch162()
    {return $this->_ch162;}
    public function ch162details()
    {return $this->_ch162details;}
    public function ch163()
    {return $this->_ch163;}
    public function ch163details()
    {return $this->_ch163details;}
    public function ch164()
    {return $this->_ch164;}
    public function ch164details()
    {return $this->_ch164details;}
    public function ch165()
    {return $this->_ch165;}
    public function ch165details()
    {return $this->_ch165details;}
    public function ch166()
    {return $this->_ch166;}
    public function ch166details()
    {return $this->_ch166details;}
    public function ch167()
    {return $this->_ch167;}
    public function ch167details()
    {return $this->_ch167details;}
    public function ch168()
    {return $this->_ch168;}
    public function ch168details()
    {return $this->_ch168details;}
    public function ch169()
    {return $this->_ch169;}
    public function ch169details()
    {return $this->_ch169details;}
    public function ch170()
    {return $this->_ch170;}
    public function ch170details()
    {return $this->_ch170details;}
    public function ch171()
    {return $this->_ch171;}
    public function ch171details()
    {return $this->_ch171details;}
    public function ch172()
    {return $this->_ch172;}
    public function ch172details()
    {return $this->_ch172details;}
    public function ch173()
    {return $this->_ch173;}
    public function ch173details()
    {return $this->_ch173details;}
    public function ch174()
    {return $this->_ch174;}
    public function ch174details()
    {return $this->_ch174details;}
    public function ch175()
    {return $this->_ch175;}
    public function ch175details()
    {return $this->_ch175details;}
    public function ch176()
    {return $this->_ch176;}
    public function ch176details()
    {return $this->_ch176details;}
    public function ch177()
    {return $this->_ch177;}
    public function ch177details()
    {return $this->_ch177details;}
    public function ch178()
    {return $this->_ch178;}
    public function ch178details()
    {return $this->_ch178details;}
    public function ch179()
    {return $this->_ch179;}
    public function ch179details()
    {return $this->_ch179details;}
    public function ch180()
    {return $this->_ch180;}
    public function ch180details()
    {return $this->_ch180details;}
    public function ch181()
    {return $this->_ch181;}
    public function ch181details()
    {return $this->_ch181details;}
    public function ch182()
    {return $this->_ch182;}
    public function ch182details()
    {return $this->_ch182details;}
    public function ch183()
    {return $this->_ch183;}
    public function ch183details()
    {return $this->_ch183details;}
    public function ch184()
    {return $this->_ch184;}
    public function ch184details()
    {return $this->_ch184details;}
    public function ch185()
    {return $this->_ch185;}
    public function ch185details()
    {return $this->_ch185details;}
    public function ch186()
    {return $this->_ch186;}
    public function ch186details()
    {return $this->_ch186details;}
    public function ch187()
    {return $this->_ch187;}
    public function ch187details()
    {return $this->_ch187details;}
    public function ch188()
    {return $this->_ch188;}
    public function ch188details()
    {return $this->_ch188details;}
    public function ch189()
    {return $this->_ch189;}
    public function ch189details()
    {return $this->_ch189details;}
    public function ch190()
    {return $this->_ch190;}
    public function ch190details()
    {return $this->_ch190details;}
    public function ch191()
    {return $this->_ch191;}
    public function ch191details()
    {return $this->_ch191details;}
    public function ch192()
    {return $this->_ch192;}
    public function ch192details()
    {return $this->_ch192details;}
    public function ch193()
    {return $this->_ch193;}
    public function ch193details()
    {return $this->_ch193details;}
    public function ch194()
    {return $this->_ch194;}
    public function ch194details()
    {return $this->_ch194details;}
    public function ch195()
    {return $this->_ch195;}
    public function ch195details()
    {return $this->_ch195details;}
    public function ch196()
    {return $this->_ch196;}
    public function ch196details()
    {return $this->_ch196details;}
    public function ch197()
    {return $this->_ch197;}
    public function ch197details()
    {return $this->_ch197details;}
    public function ch198()
    {return $this->_ch198;}
    public function ch198details()
    {return $this->_ch198details;}
    public function ch199()
    {return $this->_ch199;}
    public function ch199details()
    {return $this->_ch199details;}
    public function ch200()
    {return $this->_ch200;}
    public function ch200details()
    {return $this->_ch200details;}
    public function ch201()
    {return $this->_ch201;}
    public function ch201details()
    {return $this->_ch201details;}
    public function ch202()
    {return $this->_ch202;}
    public function ch202details()
    {return $this->_ch202details;}
    public function ch203()
    {return $this->_ch203;}
    public function ch203details()
    {return $this->_ch203details;}
    public function ch204()
    {return $this->_ch204;}
    public function ch204details()
    {return $this->_ch204details;}
    public function ch205()
    {return $this->_ch205;}
    public function ch205details()
    {return $this->_ch205details;}
    public function ch206()
    {return $this->_ch206;}
    public function ch206details()
    {return $this->_ch206details;}
    public function ch207()
    {return $this->_ch207;}
    public function ch207details()
    {return $this->_ch207details;}
    public function ch208()
    {return $this->_ch208;}
    public function ch208details()
    {return $this->_ch208details;}
    public function ch209()
    {return $this->_ch209;}
    public function ch209details()
    {return $this->_ch209details;}
    public function ch210()
    {return $this->_ch210;}
    public function ch210details()
    {return $this->_ch210details;}
    public function ch211()
    {return $this->_ch211;}
    public function ch211details()
    {return $this->_ch211details;}
    public function ch212()
    {return $this->_ch212;}
    public function ch212details()
    {return $this->_ch212details;}
    public function ch213()
    {return $this->_ch213;}
    public function ch213details()
    {return $this->_ch213details;}
    public function ch214()
    {return $this->_ch214;}
    public function ch214details()
    {return $this->_ch214details;}
    public function ch215()
    {return $this->_ch215;}
    public function ch215details()
    {return $this->_ch215details;}
    public function ch216()
    {return $this->_ch216;}
    public function ch216details()
    {return $this->_ch216details;}
    public function ch217()
    {return $this->_ch217;}
    public function ch217details()
    {return $this->_ch217details;}
    public function ch218()
    {return $this->_ch218;}
    public function ch218details()
    {return $this->_ch218details;}
    public function ch219()
    {return $this->_ch219;}
    public function ch219details()
    {return $this->_ch219details;}
    public function ch220()
    {return $this->_ch220;}
    public function ch220details()
    {return $this->_ch220details;}
    public function ch221()
    {return $this->_ch221;}
    public function ch221details()
    {return $this->_ch221details;}
    public function ch222()
    {return $this->_ch222;}
    public function ch222details()
    {return $this->_ch222details;}
    public function ch223()
    {return $this->_ch223;}
    public function ch223details()
    {return $this->_ch223details;}
    public function ch224()
    {return $this->_ch224;}
    public function ch224details()
    {return $this->_ch224details;}
    public function ch225()
    {return $this->_ch225;}
    public function ch225details()
    {return $this->_ch225details;}
    public function ch226()
    {return $this->_ch226;}
    public function ch226details()
    {return $this->_ch226details;}
    public function ch227()
    {return $this->_ch227;}
    public function ch227details()
    {return $this->_ch227details;}
    public function ch228()
    {return $this->_ch228;}
    public function ch228details()
    {return $this->_ch228details;}
    public function ch229()
    {return $this->_ch229;}
    public function ch229details()
    {return $this->_ch229details;}
    public function ch230()
    {return $this->_ch230;}
    public function ch230details()
    {return $this->_ch230details;}
    public function ch231()
    {return $this->_ch231;}
    public function ch231details()
    {return $this->_ch231details;}
    public function ch232()
    {return $this->_ch232;}
    public function ch232details()
    {return $this->_ch232details;}
    public function ch233()
    {return $this->_ch233;}
    public function ch233details()
    {return $this->_ch233details;}
    public function ch234()
    {return $this->_ch234;}
    public function ch234details()
    {return $this->_ch234details;}
    public function ch235()
    {return $this->_ch235;}
    public function ch235details()
    {return $this->_ch235details;}
    public function ch236()
    {return $this->_ch236;}
    public function ch236details()
    {return $this->_ch236details;}
    public function ch237()
    {return $this->_ch237;}
    public function ch237details()
    {return $this->_ch237details;}
    public function ch238()
    {return $this->_ch238;}
    public function ch238details()
    {return $this->_ch238details;}
    public function ch239()
    {return $this->_ch239;}
    public function ch239details()
    {return $this->_ch239details;}
    public function ch240()
    {return $this->_ch240;}
    public function ch240details()
    {return $this->_ch240details;}
    public function ch241()
    {return $this->_ch241;}
    public function ch241details()
    {return $this->_ch241details;}
    public function ch242()
    {return $this->_ch242;}
    public function ch242details()
    {return $this->_ch242details;}
    public function ch243()
    {return $this->_ch243;}
    public function ch243details()
    {return $this->_ch243details;}
    public function ch244()
    {return $this->_ch244;}
    public function ch244details()
    {return $this->_ch244details;}
    public function ch245()
    {return $this->_ch245;}
    public function ch245details()
    {return $this->_ch245details;}
    public function ch246()
    {return $this->_ch246;}
    public function ch246details()
    {return $this->_ch246details;}
    public function ch247()
    {return $this->_ch247;}
    public function ch247details()
    {return $this->_ch247details;}
    public function ch248()
    {return $this->_ch248;}
    public function ch248details()
    {return $this->_ch248details;}
    public function ch249()
    {return $this->_ch249;}
    public function ch249details()
    {return $this->_ch249details;}
    public function ch250()
    {return $this->_ch250;}
    public function ch250details()
    {return $this->_ch250details;}
    public function ch251()
    {return $this->_ch251;}
    public function ch251details()
    {return $this->_ch251details;}
    public function ch252()
    {return $this->_ch252;}
    public function ch252details()
    {return $this->_ch252details;}
    public function ch253()
    {return $this->_ch253;}
    public function ch253details()
    {return $this->_ch253details;}
    public function ch254()
    {return $this->_ch254;}
    public function ch254details()
    {return $this->_ch254details;}
    public function ch255()
    {return $this->_ch255;}
    public function ch255details()
    {return $this->_ch255details;}
    public function ch256()
    {return $this->_ch256;}
    public function ch256details()
    {return $this->_ch256details;}
    public function ch257()
    {return $this->_ch257;}
    public function ch257details()
    {return $this->_ch257details;}
    public function ch258()
    {return $this->_ch258;}
    public function ch258details()
    {return $this->_ch258details;}
    public function ch259()
    {return $this->_ch259;}
    public function ch259details()
    {return $this->_ch259details;}
    public function ch260()
    {return $this->_ch260;}
    public function ch260details()
    {return $this->_ch260details;}
    public function ch261()
    {return $this->_ch261;}
    public function ch261details()
    {return $this->_ch261details;}
    public function ch262()
    {return $this->_ch262;}
    public function ch262details()
    {return $this->_ch262details;}
    public function ch263()
    {return $this->_ch263;}
    public function ch263details()
    {return $this->_ch263details;}
    public function ch264()
    {return $this->_ch264;}
    public function ch264details()
    {return $this->_ch264details;}
    public function ch265()
    {return $this->_ch265;}
    public function ch265details()
    {return $this->_ch265details;}
    public function ch266()
    {return $this->_ch266;}
    public function ch266details()
    {return $this->_ch266details;}
    public function ch267()
    {return $this->_ch267;}
    public function ch267details()
    {return $this->_ch267details;}
    public function ch268()
    {return $this->_ch268;}
    public function ch268details()
    {return $this->_ch268details;}
    public function ch269()
    {return $this->_ch269;}
    public function ch269details()
    {return $this->_ch269details;}
    public function ch270()
    {return $this->_ch270;}
    public function ch270details()
    {return $this->_ch270details;}
    public function ch271()
    {return $this->_ch271;}
    public function ch271details()
    {return $this->_ch271details;}
    public function ch272()
    {return $this->_ch272;}
    public function ch272details()
    {return $this->_ch272details;}
    public function ch273()
    {return $this->_ch273;}
    public function ch273details()
    {return $this->_ch273details;}
    public function ch274()
    {return $this->_ch274;}
    public function ch274details()
    {return $this->_ch274details;}
    public function ch275()
    {return $this->_ch275;}
    public function ch275details()
    {return $this->_ch275details;}
    public function ch276()
    {return $this->_ch276;}
    public function ch276details()
    {return $this->_ch276details;}
    public function ch277()
    {return $this->_ch277;}
    public function ch277details()
    {return $this->_ch277details;}
    public function ch278()
    {return $this->_ch278;}
    public function ch278details()
    {return $this->_ch278details;}
    public function ch279()
    {return $this->_ch279;}
    public function ch279details()
    {return $this->_ch279details;}
    public function ch280()
    {return $this->_ch280;}
    public function ch280details()
    {return $this->_ch280details;}
    public function ch281()
    {return $this->_ch281;}
    public function ch281details()
    {return $this->_ch281details;}
    public function ch282()
    {return $this->_ch282;}
    public function ch282details()
    {return $this->_ch282details;}
    public function ch283()
    {return $this->_ch283;}
    public function ch283details()
    {return $this->_ch283details;}
    public function ch284()
    {return $this->_ch284;}
    public function ch284details()
    {return $this->_ch284details;}
    public function ch285()
    {return $this->_ch285;}
    public function ch285details()
    {return $this->_ch285details;}
    public function ch286()
    {return $this->_ch286;}
    public function ch286details()
    {return $this->_ch286details;}
    public function ch287()
    {return $this->_ch287;}
    public function ch287details()
    {return $this->_ch287details;}
    public function ch288()
    {return $this->_ch288;}
    public function ch288details()
    {return $this->_ch288details;}
    public function ch289()
    {return $this->_ch289;}
    public function ch289details()
    {return $this->_ch289details;}
    public function ch290()
    {return $this->_ch290;}
    public function ch290details()
    {return $this->_ch290details;}
    public function ch291()
    {return $this->_ch291;}
    public function ch291details()
    {return $this->_ch291details;}
    public function ch292()
    {return $this->_ch292;}
    public function ch292details()
    {return $this->_ch292details;}
    public function ch293()
    {return $this->_ch293;}
    public function ch293details()
    {return $this->_ch293details;}
    public function ch294()
    {return $this->_ch294;}
    public function ch294details()
    {return $this->_ch294details;}
    public function ch295()
    {return $this->_ch295;}
    public function ch295details()
    {return $this->_ch295details;}
    public function ch296()
    {return $this->_ch296;}
    public function ch296details()
    {return $this->_ch296details;}
    public function ch297()
    {return $this->_ch297;}
    public function ch297details()
    {return $this->_ch297details;}
    public function ch298()
    {return $this->_ch298;}
    public function ch298details()
    {return $this->_ch298details;}
    public function ch299()
    {return $this->_ch299;}
    public function ch299details()
    {return $this->_ch299details;}
    public function ch300()
    {return $this->_ch300;}
    public function ch300details()
    {return $this->_ch300details;}
    public function ch301()
    {return $this->_ch301;}
    public function ch301details()
    {return $this->_ch301details;}
    public function ch302()
    {return $this->_ch302;}
    public function ch302details()
    {return $this->_ch302details;}
    public function ch303()
    {return $this->_ch303;}
    public function ch303details()
    {return $this->_ch303details;}
    public function ch304()
    {return $this->_ch304;}
    public function ch304details()
    {return $this->_ch304details;}
    public function ch305()
    {return $this->_ch305;}
    public function ch305details()
    {return $this->_ch305details;}
    public function ch306()
    {return $this->_ch306;}
    public function ch306details()
    {return $this->_ch306details;}
    public function ch307()
    {return $this->_ch307;}
    public function ch307details()
    {return $this->_ch307details;}
    public function ch308()
    {return $this->_ch308;}
    public function ch308details()
    {return $this->_ch308details;}
    public function ch309()
    {return $this->_ch309;}
    public function ch309details()
    {return $this->_ch309details;}
    public function ch310()
    {return $this->_ch310;}
    public function ch310details()
    {return $this->_ch310details;}
    public function ch311()
    {return $this->_ch311;}
    public function ch311details()
    {return $this->_ch311details;}
    public function ch312()
    {return $this->_ch312;}
    public function ch312details()
    {return $this->_ch312details;}
    public function ch313()
    {return $this->_ch313;}
    public function ch313details()
    {return $this->_ch313details;}
    public function ch314()
    {return $this->_ch314;}
    public function ch314details()
    {return $this->_ch314details;}
    public function ch315()
    {return $this->_ch315;}
    public function ch315details()
    {return $this->_ch315details;}
    public function ch316()
    {return $this->_ch316;}
    public function ch316details()
    {return $this->_ch316details;}
    public function ch317()
    {return $this->_ch317;}
    public function ch317details()
    {return $this->_ch317details;}
    public function ch318()
    {return $this->_ch318;}
    public function ch318details()
    {return $this->_ch318details;}
    public function ch319()
    {return $this->_ch319;}
    public function ch319details()
    {return $this->_ch319details;}
    public function ch320()
    {return $this->_ch320;}
    public function ch320details()
    {return $this->_ch320details;}
    public function ch321()
    {return $this->_ch321;}
    public function ch321details()
    {return $this->_ch321details;}
    public function ch322()
    {return $this->_ch322;}
    public function ch322details()
    {return $this->_ch322details;}
    public function ch323()
    {return $this->_ch323;}
    public function ch323details()
    {return $this->_ch323details;}
    public function ch324()
    {return $this->_ch324;}
    public function ch324details()
    {return $this->_ch324details;}
    public function ch325()
    {return $this->_ch325;}
    public function ch325details()
    {return $this->_ch325details;}
    public function ch326()
    {return $this->_ch326;}
    public function ch326details()
    {return $this->_ch326details;}
    public function ch327()
    {return $this->_ch327;}
    public function ch327details()
    {return $this->_ch327details;}
    public function ch328()
    {return $this->_ch328;}
    public function ch328details()
    {return $this->_ch328details;}
    public function ch329()
    {return $this->_ch329;}
    public function ch329details()
    {return $this->_ch329details;}
    public function ch330()
    {return $this->_ch330;}
    public function ch330details()
    {return $this->_ch330details;}
    public function ch331()
    {return $this->_ch331;}
    public function ch331details()
    {return $this->_ch331details;}
    public function ch332()
    {return $this->_ch332;}
    public function ch332details()
    {return $this->_ch332details;}
    public function ch333()
    {return $this->_ch333;}
    public function ch333details()
    {return $this->_ch333details;}
    public function ch334()
    {return $this->_ch334;}
    public function ch334details()
    {return $this->_ch334details;}
    public function ch335()
    {return $this->_ch335;}
    public function ch335details()
    {return $this->_ch335details;}
    public function ch336()
    {return $this->_ch336;}
    public function ch336details()
    {return $this->_ch336details;}
    public function ch337()
    {return $this->_ch337;}
    public function ch337details()
    {return $this->_ch337details;}
    public function ch338()
    {return $this->_ch338;}
    public function ch338details()
    {return $this->_ch338details;}
    public function ch339()
    {return $this->_ch339;}
    public function ch339details()
    {return $this->_ch339details;}
    public function ch340()
    {return $this->_ch340;}
    public function ch340details()
    {return $this->_ch340details;}
    public function ch341()
    {return $this->_ch341;}
    public function ch341details()
    {return $this->_ch341details;}
    public function ch342()
    {return $this->_ch342;}
    public function ch342details()
    {return $this->_ch342details;}
    public function ch343()
    {return $this->_ch343;}
    public function ch343details()
    {return $this->_ch343details;}
    public function ch344()
    {return $this->_ch344;}
    public function ch344details()
    {return $this->_ch344details;}
    public function ch345()
    {return $this->_ch345;}
    public function ch345details()
    {return $this->_ch345details;}
    public function ch346()
    {return $this->_ch346;}
    public function ch346details()
    {return $this->_ch346details;}
    public function ch347()
    {return $this->_ch347;}
    public function ch347details()
    {return $this->_ch347details;}
    public function ch348()
    {return $this->_ch348;}
    public function ch348details()
    {return $this->_ch348details;}
    public function ch349()
    {return $this->_ch349;}
    public function ch349details()
    {return $this->_ch349details;}
    public function ch350()
    {return $this->_ch350;}
    public function ch350details()
    {return $this->_ch350details;}
    public function ch351()
    {return $this->_ch351;}
    public function ch351details()
    {return $this->_ch351details;}
    public function ch352()
    {return $this->_ch352;}
    public function ch352details()
    {return $this->_ch352details;}
    public function ch353()
    {return $this->_ch353;}
    public function ch353details()
    {return $this->_ch353details;}
    public function ch354()
    {return $this->_ch354;}
    public function ch354details()
    {return $this->_ch354details;}
    public function ch355()
    {return $this->_ch355;}
    public function ch355details()
    {return $this->_ch355details;}
    public function ch356()
    {return $this->_ch356;}
    public function ch356details()
    {return $this->_ch356details;}
    public function ch357()
    {return $this->_ch357;}
    public function ch357details()
    {return $this->_ch357details;}
    public function ch358()
    {return $this->_ch358;}
    public function ch358details()
    {return $this->_ch358details;}
    public function ch359()
    {return $this->_ch359;}
    public function ch359details()
    {return $this->_ch359details;}
    public function ch360()
    {return $this->_ch360;}
    public function ch360details()
    {return $this->_ch360details;}
    public function ch361()
    {return $this->_ch361;}
    public function ch361details()
    {return $this->_ch361details;}
    public function ch362()
    {return $this->_ch362;}
    public function ch362details()
    {return $this->_ch362details;}
    public function ch363()
    {return $this->_ch363;}
    public function ch363details()
    {return $this->_ch363details;}
    public function ch364()
    {return $this->_ch364;}
    public function ch364details()
    {return $this->_ch364details;}
    public function ch365()
    {return $this->_ch365;}
    public function ch365details()
    {return $this->_ch365details;}
    public function ch366()
    {return $this->_ch366;}
    public function ch366details()
    {return $this->_ch366details;}
    public function ch367()
    {return $this->_ch367;}
    public function ch367details()
    {return $this->_ch367details;}
    public function ch368()
    {return $this->_ch368;}
    public function ch368details()
    {return $this->_ch368details;}
    public function ch369()
    {return $this->_ch369;}
    public function ch369details()
    {return $this->_ch369details;}
    public function ch370()
    {return $this->_ch370;}
    public function ch370details()
    {return $this->_ch370details;}
    public function ch371()
    {return $this->_ch371;}
    public function ch371details()
    {return $this->_ch371details;}
    public function ch372()
    {return $this->_ch372;}
    public function ch372details()
    {return $this->_ch372details;}
    public function ch373()
    {return $this->_ch373;}
    public function ch373details()
    {return $this->_ch373details;}
    public function ch374()
    {return $this->_ch374;}
    public function ch374details()
    {return $this->_ch374details;}
    public function ch375()
    {return $this->_ch375;}
    public function ch375details()
    {return $this->_ch375details;}
    public function ch376()
    {return $this->_ch376;}
    public function ch376details()
    {return $this->_ch376details;}
    public function ch377()
    {return $this->_ch377;}
    public function ch377details()
    {return $this->_ch377details;}
    public function ch378()
    {return $this->_ch378;}
    public function ch378details()
    {return $this->_ch378details;}
    public function ch379()
    {return $this->_ch379;}
    public function ch379details()
    {return $this->_ch379details;}
    public function ch380()
    {return $this->_ch380;}
    public function ch380details()
    {return $this->_ch380details;}
    public function ch381()
    {return $this->_ch381;}
    public function ch381details()
    {return $this->_ch381details;}
    public function ch382()
    {return $this->_ch382;}
    public function ch382details()
    {return $this->_ch382details;}
    public function ch383()
    {return $this->_ch383;}
    public function ch383details()
    {return $this->_ch383details;}
    public function ch384()
    {return $this->_ch384;}
    public function ch384details()
    {return $this->_ch384details;}
    public function ch385()
    {return $this->_ch385;}
    public function ch385details()
    {return $this->_ch385details;}
    public function ch386()
    {return $this->_ch386;}
    public function ch386details()
    {return $this->_ch386details;}
    public function ch387()
    {return $this->_ch387;}
    public function ch387details()
    {return $this->_ch387details;}
    public function ch388()
    {return $this->_ch388;}
    public function ch388details()
    {return $this->_ch388details;}
    public function ch389()
    {return $this->_ch389;}
    public function ch389details()
    {return $this->_ch389details;}
    public function ch390()
    {return $this->_ch390;}
    public function ch390details()
    {return $this->_ch390details;}
    public function ch391()
    {return $this->_ch391;}
    public function ch391details()
    {return $this->_ch391details;}
    public function ch392()
    {return $this->_ch392;}
    public function ch392details()
    {return $this->_ch392details;}
    public function ch393()
    {return $this->_ch393;}
    public function ch393details()
    {return $this->_ch393details;}
    public function ch394()
    {return $this->_ch394;}
    public function ch394details()
    {return $this->_ch394details;}
    public function ch395()
    {return $this->_ch395;}
    public function ch395details()
    {return $this->_ch395details;}
    public function ch396()
    {return $this->_ch396;}
    public function ch396details()
    {return $this->_ch396details;}
    public function ch397()
    {return $this->_ch397;}
    public function ch397details()
    {return $this->_ch397details;}
    public function ch398()
    {return $this->_ch398;}
    public function ch398details()
    {return $this->_ch398details;}
    public function ch399()
    {return $this->_ch399;}
    public function ch399details()
    {return $this->_ch399details;}
    public function ch400()
    {return $this->_ch400;}
    public function ch400details()
    {return $this->_ch400details;}
    public function ch401()
    {return $this->_ch401;}
    public function ch401details()
    {return $this->_ch401details;}
    public function ch402()
    {return $this->_ch402;}
    public function ch402details()
    {return $this->_ch402details;}
    public function ch403()
    {return $this->_ch403;}
    public function ch403details()
    {return $this->_ch403details;}
    public function ch404()
    {return $this->_ch404;}
    public function ch404details()
    {return $this->_ch404details;}
    public function ch405()
    {return $this->_ch405;}
    public function ch405details()
    {return $this->_ch405details;}
    public function ch406()
    {return $this->_ch406;}
    public function ch406details()
    {return $this->_ch406details;}
    public function ch407()
    {return $this->_ch407;}
    public function ch407details()
    {return $this->_ch407details;}
    public function ch408()
    {return $this->_ch408;}
    public function ch408details()
    {return $this->_ch408details;}
    public function ch409()
    {return $this->_ch409;}
    public function ch409details()
    {return $this->_ch409details;}
    public function ch410()
    {return $this->_ch410;}
    public function ch410details()
    {return $this->_ch410details;}
    public function ch411()
    {return $this->_ch411;}
    public function ch411details()
    {return $this->_ch411details;}
    public function ch412()
    {return $this->_ch412;}
    public function ch412details()
    {return $this->_ch412details;}
    public function ch413()
    {return $this->_ch413;}
    public function ch413details()
    {return $this->_ch413details;}
    public function ch414()
    {return $this->_ch414;}
    public function ch414details()
    {return $this->_ch414details;}
    public function ch415()
    {return $this->_ch415;}
    public function ch415details()
    {return $this->_ch415details;}
    public function ch416()
    {return $this->_ch416;}
    public function ch416details()
    {return $this->_ch416details;}
    public function ch417()
    {return $this->_ch417;}
    public function ch417details()
    {return $this->_ch417details;}
    public function ch418()
    {return $this->_ch418;}
    public function ch418details()
    {return $this->_ch418details;}
    public function ch419()
    {return $this->_ch419;}
    public function ch419details()
    {return $this->_ch419details;}
    public function ch420()
    {return $this->_ch420;}
    public function ch420details()
    {return $this->_ch420details;}
    public function ch421()
    {return $this->_ch421;}
    public function ch421details()
    {return $this->_ch421details;}
    public function ch422()
    {return $this->_ch422;}
    public function ch422details()
    {return $this->_ch422details;}
    public function ch423()
    {return $this->_ch423;}
    public function ch423details()
    {return $this->_ch423details;}
    public function ch424()
    {return $this->_ch424;}
    public function ch424details()
    {return $this->_ch424details;}
    public function ch425()
    {return $this->_ch425;}
    public function ch425details()
    {return $this->_ch425details;}
    public function ch426()
    {return $this->_ch426;}
    public function ch426details()
    {return $this->_ch426details;}
    public function ch427()
    {return $this->_ch427;}
    public function ch427details()
    {return $this->_ch427details;}
    public function ch428()
    {return $this->_ch428;}
    public function ch428details()
    {return $this->_ch428details;}
    public function ch429()
    {return $this->_ch429;}
    public function ch429details()
    {return $this->_ch429details;}
    public function ch430()
    {return $this->_ch430;}
    public function ch430details()
    {return $this->_ch430details;}
    public function ch431()
    {return $this->_ch431;}
    public function ch431details()
    {return $this->_ch431details;}
    public function ch432()
    {return $this->_ch432;}
    public function ch432details()
    {return $this->_ch432details;}
    public function ch433()
    {return $this->_ch433;}
    public function ch433details()
    {return $this->_ch433details;}
    public function ch434()
    {return $this->_ch434;}
    public function ch434details()
    {return $this->_ch434details;}
    public function ch435()
    {return $this->_ch435;}
    public function ch435details()
    {return $this->_ch435details;}
    public function ch436()
    {return $this->_ch436;}
    public function ch436details()
    {return $this->_ch436details;}
    public function ch437()
    {return $this->_ch437;}
    public function ch437details()
    {return $this->_ch437details;}
    public function ch438()
    {return $this->_ch438;}
    public function ch438details()
    {return $this->_ch438details;}
    public function ch439()
    {return $this->_ch439;}
    public function ch439details()
    {return $this->_ch439details;}
    public function ch440()
    {return $this->_ch440;}
    public function ch440details()
    {return $this->_ch440details;}
    public function ch441()
    {return $this->_ch441;}
    public function ch441details()
    {return $this->_ch441details;}
    public function ch442()
    {return $this->_ch442;}
    public function ch442details()
    {return $this->_ch442details;}
    public function ch443()
    {return $this->_ch443;}
    public function ch443details()
    {return $this->_ch443details;}
    public function ch444()
    {return $this->_ch444;}
    public function ch444details()
    {return $this->_ch444details;}
    public function ch445()
    {return $this->_ch445;}
    public function ch445details()
    {return $this->_ch445details;}
    public function ch446()
    {return $this->_ch446;}
    public function ch446details()
    {return $this->_ch446details;}
    public function ch447()
    {return $this->_ch447;}
    public function ch447details()
    {return $this->_ch447details;}
    public function ch448()
    {return $this->_ch448;}
    public function ch448details()
    {return $this->_ch448details;}
    public function ch449()
    {return $this->_ch449;}
    public function ch449details()
    {return $this->_ch449details;}
    public function ch450()
    {return $this->_ch450;}
    public function ch450details()
    {return $this->_ch450details;}
    public function ch451()
    {return $this->_ch451;}
    public function ch451details()
    {return $this->_ch451details;}
    public function ch452()
    {return $this->_ch452;}
    public function ch452details()
    {return $this->_ch452details;}
    public function ch453()
    {return $this->_ch453;}
    public function ch453details()
    {return $this->_ch453details;}
    public function ch454()
    {return $this->_ch454;}
    public function ch454details()
    {return $this->_ch454details;}
    public function ch455()
    {return $this->_ch455;}
    public function ch455details()
    {return $this->_ch455details;}
    public function ch456()
    {return $this->_ch456;}
    public function ch456details()
    {return $this->_ch456details;}
    public function ch457()
    {return $this->_ch457;}
    public function ch457details()
    {return $this->_ch457details;}
    public function ch458()
    {return $this->_ch458;}
    public function ch458details()
    {return $this->_ch458details;}
    public function ch459()
    {return $this->_ch459;}
    public function ch459details()
    {return $this->_ch459details;}
    public function ch460()
    {return $this->_ch460;}
    public function ch460details()
    {return $this->_ch460details;}
    public function ch461()
    {return $this->_ch461;}
    public function ch461details()
    {return $this->_ch461details;}
    public function ch462()
    {return $this->_ch462;}
    public function ch462details()
    {return $this->_ch462details;}
    public function ch463()
    {return $this->_ch463;}
    public function ch463details()
    {return $this->_ch463details;}
    public function ch464()
    {return $this->_ch464;}
    public function ch464details()
    {return $this->_ch464details;}
    public function ch465()
    {return $this->_ch465;}
    public function ch465details()
    {return $this->_ch465details;}
    public function ch466()
    {return $this->_ch466;}
    public function ch466details()
    {return $this->_ch466details;}
    public function ch467()
    {return $this->_ch467;}
    public function ch467details()
    {return $this->_ch467details;}
    public function ch468()
    {return $this->_ch468;}
    public function ch468details()
    {return $this->_ch468details;}
    public function ch469()
    {return $this->_ch469;}
    public function ch469details()
    {return $this->_ch469details;}
    public function ch470()
    {return $this->_ch470;}
    public function ch470details()
    {return $this->_ch470details;}
    public function ch471()
    {return $this->_ch471;}
    public function ch471details()
    {return $this->_ch471details;}
    public function ch472()
    {return $this->_ch472;}
    public function ch472details()
    {return $this->_ch472details;}
    public function ch473()
    {return $this->_ch473;}
    public function ch473details()
    {return $this->_ch473details;}
    public function ch474()
    {return $this->_ch474;}
    public function ch474details()
    {return $this->_ch474details;}
    public function ch475()
    {return $this->_ch475;}
    public function ch475details()
    {return $this->_ch475details;}
    public function ch476()
    {return $this->_ch476;}
    public function ch476details()
    {return $this->_ch476details;}
    public function ch477()
    {return $this->_ch477;}
    public function ch477details()
    {return $this->_ch477details;}
    public function ch478()
    {return $this->_ch478;}
    public function ch478details()
    {return $this->_ch478details;}
    public function ch479()
    {return $this->_ch479;}
    public function ch479details()
    {return $this->_ch479details;}
    public function ch480()
    {return $this->_ch480;}
    public function ch480details()
    {return $this->_ch480details;}
    public function ch481()
    {return $this->_ch481;}
    public function ch481details()
    {return $this->_ch481details;}
    public function ch482()
    {return $this->_ch482;}
    public function ch482details()
    {return $this->_ch482details;}
    public function ch483()
    {return $this->_ch483;}
    public function ch483details()
    {return $this->_ch483details;}
    public function ch484()
    {return $this->_ch484;}
    public function ch484details()
    {return $this->_ch484details;}
    public function ch485()
    {return $this->_ch485;}
    public function ch485details()
    {return $this->_ch485details;}
    public function ch486()
    {return $this->_ch486;}
    public function ch486details()
    {return $this->_ch486details;}
    public function ch487()
    {return $this->_ch487;}
    public function ch487details()
    {return $this->_ch487details;}
    public function ch488()
    {return $this->_ch488;}
    public function ch488details()
    {return $this->_ch488details;}
    public function ch489()
    {return $this->_ch489;}
    public function ch489details()
    {return $this->_ch489details;}
    public function ch490()
    {return $this->_ch490;}
    public function ch490details()
    {return $this->_ch490details;}
    public function ch491()
    {return $this->_ch491;}
    public function ch491details()
    {return $this->_ch491details;}
    public function ch492()
    {return $this->_ch492;}
    public function ch492details()
    {return $this->_ch492details;}
    public function ch493()
    {return $this->_ch493;}
    public function ch493details()
    {return $this->_ch493details;}
    public function ch494()
    {return $this->_ch494;}
    public function ch494details()
    {return $this->_ch494details;}
    public function ch495()
    {return $this->_ch495;}
    public function ch495details()
    {return $this->_ch495details;}
    public function ch496()
    {return $this->_ch496;}
    public function ch496details()
    {return $this->_ch496details;}
    public function ch497()
    {return $this->_ch497;}
    public function ch497details()
    {return $this->_ch497details;}
    public function ch498()
    {return $this->_ch498;}
    public function ch498details()
    {return $this->_ch498details;}
    public function ch499()
    {return $this->_ch499;}
    public function ch499details()
    {return $this->_ch499details;}
    public function ch500()
    {return $this->_ch500;}
    public function ch500details()
    {return $this->_ch500details;}
    public function ch501()
    {return $this->_ch501;}
    public function ch501details()
    {return $this->_ch501details;}
    public function ch502()
    {return $this->_ch502;}
    public function ch502details()
    {return $this->_ch502details;}
    public function ch503()
    {return $this->_ch503;}
    public function ch503details()
    {return $this->_ch503details;}
    public function ch504()
    {return $this->_ch504;}
    public function ch504details()
    {return $this->_ch504details;}
    public function ch505()
    {return $this->_ch505;}
    public function ch505details()
    {return $this->_ch505details;}
    public function ch506()
    {return $this->_ch506;}
    public function ch506details()
    {return $this->_ch506details;}
    public function ch507()
    {return $this->_ch507;}
    public function ch507details()
    {return $this->_ch507details;}
    public function ch508()
    {return $this->_ch508;}
    public function ch508details()
    {return $this->_ch508details;}
    public function ch509()
    {return $this->_ch509;}
    public function ch509details()
    {return $this->_ch509details;}
    public function ch510()
    {return $this->_ch510;}
    public function ch510details()
    {return $this->_ch510details;}
    public function ch511()
    {return $this->_ch511;}
    public function ch511details()
    {return $this->_ch511details;}
    public function ch512()
    {return $this->_ch512;}
    public function ch512details()
    {return $this->_ch512details;}

    # /Getters

    # Setters
    public function setManufacturer($manufacturer)
    {
        if (is_string($manufacturer)) {
            $this->_manufacturer = html_entity_decode(html_entity_decode($manufacturer));
        }
    }
    public function setFixture($fixture)
    {
        if (is_string($fixture)) {
            $this->_fixture = html_entity_decode(html_entity_decode($fixture));
        }
    }
    public function setStatus($status)
    {
        if (is_string($status)) {
            $this->_status = $status;
        }
    }
    public function setEvol($evol)
    {
        if (is_string($evol)) {
            $this->_evol = $evol;
        }
    }
    public function setLastdate($lastdate)
    {
        $d = DateTime::createFromFormat('Y-m-d', $lastdate);
        if ($d && $d->format('Y-m-d') == $lastdate) {
            $this->_lastdate = $lastdate;
        }
    }
    public function setMh($mh)
    {
        if (is_bool($mh)) {
            $this->_mh = $mh;
        } else {
            $this->_mh = ((int) $mh == 1) ? true : false;
        }
    }
    public function setChannels($channels)
    {
        if ($channels) {
            $this->_channels = (int) $channels;
            if (empty($this->mode())) {
                $this->setMode($channels . 'ch');
            }
        }
    }
    public function setWheel($wheel)
    {
        if (is_int($wheel)) {
            $this->_wheel = $wheel;
        }
    }

    public function setColorslots1($colorslots1)
    {
        if (is_int($colorslots1)) {
            $this->_colorslots1 = $colorslots1;
        }
    }
    public function setColordetails1($colordetails1)
    {
        if (is_string($colordetails1)) {
            $this->_colordetails1 = $colordetails1;
        }
    }
    public function setColorslots2($colorslots2)
    {
        if (is_int($colorslots2)) {
            $this->_colorslots2 = $colorslots2;
        }
    }
    public function setColordetails2($colordetails2)
    {
        if (is_string($colordetails2)) {
            $this->_colordetails2 = $colordetails2;
        }
    }
    public function setColorslots3($colorslots3)
    {
        if (is_int($colorslots3)) {
            $this->_colorslots3 = $colorslots3;
        }
    }
    public function setColordetails3($colordetails3)
    {
        if (is_string($colordetails3)) {
            $this->_colordetails3 = $colordetails3;
        }
    }
    public function setColorslots4($colorslots4)
    {
        if (is_int($colorslots4)) {
            $this->_colorslots4 = $colorslots4;
        }
    }
    public function setColordetails4($colordetails4)
    {
        if (is_string($colordetails4)) {
            $this->_colordetails4 = $colordetails4;
        }
    }
    public function setColorslots5($colorslots5)
    {
        if (is_int($colorslots5)) {
            $this->_colorslots5 = $colorslots5;
        }
    }
    public function setColordetails5($colordetails5)
    {
        if (is_string($colordetails5)) {
            $this->_colordetails5 = $colordetails5;
        }
    }
    public function setColorslots6($colorslots6)
    {
        if (is_int($colorslots6)) {
            $this->_colorslots6 = $colorslots6;
        }
    }
    public function setColordetails6($colordetails6)
    {
        if (is_string($colordetails6)) {
            $this->_colordetails6 = $colordetails6;
        }
    }
    public function setColorslots7($colorslots7)
    {
        if (is_int($colorslots7)) {
            $this->_colorslots7 = $colorslots7;
        }
    }
    public function setColordetails7($colordetails7)
    {
        if (is_string($colordetails7)) {
            $this->_colordetails7 = $colordetails7;
        }
    }
    public function setColorslots8($colorslots8)
    {
        if (is_int($colorslots8)) {
            $this->_colorslots8 = $colorslots8;
        }
    }
    public function setColordetails8($colordetails8)
    {
        if (is_string($colordetails8)) {
            $this->_colordetails8 = $colordetails8;
        }
    }
    public function setColorslots9($colorslots9)
    {
        if (is_int($colorslots9)) {
            $this->_colorslots9 = $colorslots9;
        }
    }
    public function setColordetails9($colordetails9)
    {
        if (is_string($colordetails9)) {
            $this->_colordetails9 = $colordetails9;
        }
    }
    public function setColorslots10($colorslots10)
    {
        if (is_int($colorslots10)) {
            $this->_colorslots10 = $colorslots10;
        }
    }
    public function setColordetails10($colordetails10)
    {
        if (is_string($colordetails10)) {
            $this->_colordetails10 = $colordetails10;
        }
    }
    public function setWheelcolor($wheelcolor)
    {
        if (is_string($wheelcolor)) {
            $this->_wheelcolor = $wheelcolor;
        }
    }
    public function setGoboslots1($goboslots1)
    {
        if (is_int($goboslots1)) {
            $this->_goboslots1 = $goboslots1;
        }
    }
    public function setGobodetails1($gobodetails1)
    {
        if (is_string($gobodetails1)) {
            $this->_gobodetails1 = $gobodetails1;
        }
    }
    public function setGoboslots2($goboslots2)
    {
        if (is_int($goboslots2)) {
            $this->_goboslots2 = $goboslots2;
        }
    }
    public function setGobodetails2($gobodetails2)
    {
        if (is_string($gobodetails2)) {
            $this->_gobodetails2 = $gobodetails2;
        }
    }
    public function setGoboslots3($goboslots3)
    {
        if (is_int($goboslots3)) {
            $this->_goboslots3 = $goboslots3;
        }
    }
    public function setGobodetails3($gobodetails3)
    {
        if (is_string($gobodetails3)) {
            $this->_gobodetails3 = $gobodetails3;
        }
    }
    public function setGoboslots4($goboslots4)
    {
        if (is_int($goboslots4)) {
            $this->_goboslots4 = $goboslots4;
        }
    }
    public function setGobodetails4($gobodetails4)
    {
        if (is_string($gobodetails4)) {
            $this->_gobodetails4 = $gobodetails4;
        }
    }
    public function setGoboslots5($goboslots5)
    {
        if (is_int($goboslots5)) {
            $this->_goboslots5 = $goboslots5;
        }
    }
    public function setGobodetails5($gobodetails5)
    {
        if (is_string($gobodetails5)) {
            $this->_gobodetails5 = $gobodetails5;
        }
    }
    public function setGoboslots6($goboslots6)
    {
        if (is_int($goboslots6)) {
            $this->_goboslots6 = $goboslots6;
        }
    }
    public function setGobodetails6($gobodetails6)
    {
        if (is_string($gobodetails6)) {
            $this->_gobodetails6 = $gobodetails6;
        }
    }
    public function setGoboslots7($goboslots7)
    {
        if (is_int($goboslots7)) {
            $this->_goboslots7 = $goboslots7;
        }
    }
    public function setGobodetails7($gobodetails7)
    {
        if (is_string($gobodetails7)) {
            $this->_gobodetails7 = $gobodetails7;
        }
    }
    public function setGoboslots8($goboslots8)
    {
        if (is_int($goboslots8)) {
            $this->_goboslots8 = $goboslots8;
        }
    }
    public function setGobodetails8($gobodetails8)
    {
        if (is_string($gobodetails8)) {
            $this->_gobodetails8 = $gobodetails8;
        }
    }
    public function setGoboslots9($goboslots9)
    {
        if (is_int($goboslots9)) {
            $this->_goboslots9 = $goboslots9;
        }
    }
    public function setGobodetails9($gobodetails9)
    {
        if (is_string($gobodetails9)) {
            $this->_gobodetails9 = $gobodetails9;
        }
    }
    public function setGoboslots10($goboslots10)
    {
        if (is_int($goboslots10)) {
            $this->_goboslots10 = $goboslots10;
        }
    }
    public function setGobodetails10($gobodetails10)
    {
        if (is_string($gobodetails10)) {
            $this->_gobodetails10 = $gobodetails10;
        }
    }
    public function setWheelgobo($wheelgobo)
    {
        if (is_string($wheelgobo)) {
            $this->_wheelgobo = $wheelgobo;
        }
    }
    public function setAnimationslots1($animationslots1)
    {
        if (is_int($animationslots1)) {
            $this->_animationslots1 = $animationslots1;
        }
    }
    public function setAnimationdetails1($animationdetails1)
    {
        if (is_string($animationdetails1)) {
            $this->_animationdetails1 = $animationdetails1;
        }
    }
    public function setAnimationslots2($animationslots2)
    {
        if (is_int($animationslots2)) {
            $this->_animationslots2 = $animationslots2;
        }
    }
    public function setAnimationdetails2($animationdetails2)
    {
        if (is_string($animationdetails2)) {
            $this->_animationdetails2 = $animationdetails2;
        }
    }
    public function setAnimationslots3($animationslots3)
    {
        if (is_int($animationslots3)) {
            $this->_animationslots3 = $animationslots3;
        }
    }
    public function setAnimationdetails3($animationdetails3)
    {
        if (is_string($animationdetails3)) {
            $this->_animationdetails3 = $animationdetails3;
        }
    }
    public function setAnimationslots4($animationslots4)
    {
        if (is_int($animationslots4)) {
            $this->_animationslots4 = $animationslots4;
        }
    }
    public function setAnimationdetails4($animationdetails4)
    {
        if (is_string($animationdetails4)) {
            $this->_animationdetails4 = $animationdetails4;
        }
    }
    public function setAnimationslots5($animationslots5)
    {
        if (is_int($animationslots5)) {
            $this->_animationslots5 = $animationslots5;
        }
    }
    public function setAnimationdetails5($animationdetails5)
    {
        if (is_string($animationdetails5)) {
            $this->_animationdetails5 = $animationdetails5;
        }
    }
    public function setAnimationslots6($animationslots6)
    {
        if (is_int($animationslots6)) {
            $this->_animationslots6 = $animationslots6;
        }
    }
    public function setAnimationdetails6($animationdetails6)
    {
        if (is_string($animationdetails6)) {
            $this->_animationdetails6 = $animationdetails6;
        }
    }
    public function setAnimationslots7($animationslots7)
    {
        if (is_int($animationslots7)) {
            $this->_animationslots7 = $animationslots7;
        }
    }
    public function setAnimationdetails7($animationdetails7)
    {
        if (is_string($animationdetails7)) {
            $this->_animationdetails7 = $animationdetails7;
        }
    }
    public function setAnimationslots8($animationslots8)
    {
        if (is_int($animationslots8)) {
            $this->_animationslots8 = $animationslots8;
        }
    }
    public function setAnimationdetails8($animationdetails8)
    {
        if (is_string($animationdetails8)) {
            $this->_animationdetails8 = $animationdetails8;
        }
    }
    public function setAnimationslots9($animationslots9)
    {
        if (is_int($animationslots9)) {
            $this->_animationslots9 = $animationslots9;
        }
    }
    public function setAnimationdetails9($animationdetails9)
    {
        if (is_string($animationdetails9)) {
            $this->_animationdetails9 = $animationdetails9;
        }
    }
    public function setAnimationslots10($animationslots10)
    {
        if (is_int($animationslots10)) {
            $this->_animationslots10 = $animationslots10;
        }
    }
    public function setAnimationdetails10($animationdetails10)
    {
        if (is_string($animationdetails10)) {
            $this->_animationdetails10 = $animationdetails10;
        }
    }
    public function setWheelanimation($wheelanimation)
    {
        if (is_string($wheelanimation)) {
            $this->_wheelanimation = $wheelanimation;
        }
    }
    public function setMode($mode)
    {
        if (is_string($mode) or is_int($mode)) {
            $this->_mode = (string) $mode;
        }
    }
    public function setCh1($ch1)
    {
        if (is_string($ch1)) {
            $this->_ch1 = $ch1;
        }
    }
    public function setCh1details($ch1details)
    {
        if (is_string($ch1details)) {
            $this->_ch1details = $ch1details;
        }
    }
    public function setCh2($ch2)
    {
        if (is_string($ch2)) {
            $this->_ch2 = $ch2;
        }
    }
    public function setCh2details($ch2details)
    {
        if (is_string($ch2details)) {
            $this->_ch2details = $ch2details;
        }
    }
    public function setCh3($ch3)
    {
        if (is_string($ch3)) {
            $this->_ch3 = $ch3;
        }
    }
    public function setCh3details($ch3details)
    {
        if (is_string($ch3details)) {
            $this->_ch3details = $ch3details;
        }
    }
    public function setCh4($ch4)
    {
        if (is_string($ch4)) {
            $this->_ch4 = $ch4;
        }
    }
    public function setCh4details($ch4details)
    {
        if (is_string($ch4details)) {
            $this->_ch4details = $ch4details;
        }
    }
    public function setCh5($ch5)
    {
        if (is_string($ch5)) {
            $this->_ch5 = $ch5;
        }
    }
    public function setCh5details($ch5details)
    {
        if (is_string($ch5details)) {
            $this->_ch5details = $ch5details;
        }
    }
    public function setCh6($ch6)
    {
        if (is_string($ch6)) {
            $this->_ch6 = $ch6;
        }
    }
    public function setCh6details($ch6details)
    {
        if (is_string($ch6details)) {
            $this->_ch6details = $ch6details;
        }
    }
    public function setCh7($ch7)
    {
        if (is_string($ch7)) {
            $this->_ch7 = $ch7;
        }
    }
    public function setCh7details($ch7details)
    {
        if (is_string($ch7details)) {
            $this->_ch7details = $ch7details;
        }
    }
    public function setCh8($ch8)
    {
        if (is_string($ch8)) {
            $this->_ch8 = $ch8;
        }
    }
    public function setCh8details($ch8details)
    {
        if (is_string($ch8details)) {
            $this->_ch8details = $ch8details;
        }
    }
    public function setCh9($ch9)
    {
        if (is_string($ch9)) {
            $this->_ch9 = $ch9;
        }
    }
    public function setCh9details($ch9details)
    {
        if (is_string($ch9details)) {
            $this->_ch9details = $ch9details;
        }
    }
    public function setCh10($ch10)
    {
        if (is_string($ch10)) {
            $this->_ch10 = $ch10;
        }
    }
    public function setCh10details($ch10details)
    {
        if (is_string($ch10details)) {
            $this->_ch10details = $ch10details;
        }
    }
    public function setCh11($ch11)
    {
        if (is_string($ch11)) {
            $this->_ch11 = $ch11;
        }
    }
    public function setCh11details($ch11details)
    {
        if (is_string($ch11details)) {
            $this->_ch11details = $ch11details;
        }
    }
    public function setCh12($ch12)
    {
        if (is_string($ch12)) {
            $this->_ch12 = $ch12;
        }
    }
    public function setCh12details($ch12details)
    {
        if (is_string($ch12details)) {
            $this->_ch12details = $ch12details;
        }
    }
    public function setCh13($ch13)
    {
        if (is_string($ch13)) {
            $this->_ch13 = $ch13;
        }
    }
    public function setCh13details($ch13details)
    {
        if (is_string($ch13details)) {
            $this->_ch13details = $ch13details;
        }
    }
    public function setCh14($ch14)
    {
        if (is_string($ch14)) {
            $this->_ch14 = $ch14;
        }
    }
    public function setCh14details($ch14details)
    {
        if (is_string($ch14details)) {
            $this->_ch14details = $ch14details;
        }
    }
    public function setCh15($ch15)
    {
        if (is_string($ch15)) {
            $this->_ch15 = $ch15;
        }
    }
    public function setCh15details($ch15details)
    {
        if (is_string($ch15details)) {
            $this->_ch15details = $ch15details;
        }
    }
    public function setCh16($ch16)
    {
        if (is_string($ch16)) {
            $this->_ch16 = $ch16;
        }
    }
    public function setCh16details($ch16details)
    {
        if (is_string($ch16details)) {
            $this->_ch16details = $ch16details;
        }
    }
    public function setCh17($ch17)
    {
        if (is_string($ch17)) {
            $this->_ch17 = $ch17;
        }
    }
    public function setCh17details($ch17details)
    {
        if (is_string($ch17details)) {
            $this->_ch17details = $ch17details;
        }
    }
    public function setCh18($ch18)
    {
        if (is_string($ch18)) {
            $this->_ch18 = $ch18;
        }
    }
    public function setCh18details($ch18details)
    {
        if (is_string($ch18details)) {
            $this->_ch18details = $ch18details;
        }
    }
    public function setCh19($ch19)
    {
        if (is_string($ch19)) {
            $this->_ch19 = $ch19;
        }
    }
    public function setCh19details($ch19details)
    {
        if (is_string($ch19details)) {
            $this->_ch19details = $ch19details;
        }
    }
    public function setCh20($ch20)
    {
        if (is_string($ch20)) {
            $this->_ch20 = $ch20;
        }
    }
    public function setCh20details($ch20details)
    {
        if (is_string($ch20details)) {
            $this->_ch20details = $ch20details;
        }
    }
    public function setCh21($ch21)
    {
        if (is_string($ch21)) {
            $this->_ch21 = $ch21;
        }
    }
    public function setCh21details($ch21details)
    {
        if (is_string($ch21details)) {
            $this->_ch21details = $ch21details;
        }
    }
    public function setCh22($ch22)
    {
        if (is_string($ch22)) {
            $this->_ch22 = $ch22;
        }
    }
    public function setCh22details($ch22details)
    {
        if (is_string($ch22details)) {
            $this->_ch22details = $ch22details;
        }
    }
    public function setCh23($ch23)
    {
        if (is_string($ch23)) {
            $this->_ch23 = $ch23;
        }
    }
    public function setCh23details($ch23details)
    {
        if (is_string($ch23details)) {
            $this->_ch23details = $ch23details;
        }
    }
    public function setCh24($ch24)
    {
        if (is_string($ch24)) {
            $this->_ch24 = $ch24;
        }
    }
    public function setCh24details($ch24details)
    {
        if (is_string($ch24details)) {
            $this->_ch24details = $ch24details;
        }
    }
    public function setCh25($ch25)
    {
        if (is_string($ch25)) {
            $this->_ch25 = $ch25;
        }
    }
    public function setCh25details($ch25details)
    {
        if (is_string($ch25details)) {
            $this->_ch25details = $ch25details;
        }
    }
    public function setCh26($ch26)
    {
        if (is_string($ch26)) {
            $this->_ch26 = $ch26;
        }
    }
    public function setCh26details($ch26details)
    {
        if (is_string($ch26details)) {
            $this->_ch26details = $ch26details;
        }
    }
    public function setCh27($ch27)
    {
        if (is_string($ch27)) {
            $this->_ch27 = $ch27;
        }
    }
    public function setCh27details($ch27details)
    {
        if (is_string($ch27details)) {
            $this->_ch27details = $ch27details;
        }
    }
    public function setCh28($ch28)
    {
        if (is_string($ch28)) {
            $this->_ch28 = $ch28;
        }
    }
    public function setCh28details($ch28details)
    {
        if (is_string($ch28details)) {
            $this->_ch28details = $ch28details;
        }
    }
    public function setCh29($ch29)
    {
        if (is_string($ch29)) {
            $this->_ch29 = $ch29;
        }
    }
    public function setCh29details($ch29details)
    {
        if (is_string($ch29details)) {
            $this->_ch29details = $ch29details;
        }
    }
    public function setCh30($ch30)
    {
        if (is_string($ch30)) {
            $this->_ch30 = $ch30;
        }
    }
    public function setCh30details($ch30details)
    {
        if (is_string($ch30details)) {
            $this->_ch30details = $ch30details;
        }
    }
    public function setCh31($ch31)
    {
        if (is_string($ch31)) {
            $this->_ch31 = $ch31;
        }
    }
    public function setCh31details($ch31details)
    {
        if (is_string($ch31details)) {
            $this->_ch31details = $ch31details;
        }
    }
    public function setCh32($ch32)
    {
        if (is_string($ch32)) {
            $this->_ch32 = $ch32;
        }
    }
    public function setCh32details($ch32details)
    {
        if (is_string($ch32details)) {
            $this->_ch32details = $ch32details;
        }
    }
    public function setCh33($ch33)
    {
        if (is_string($ch33)) {
            $this->_ch33 = $ch33;
        }
    }
    public function setCh33details($ch33details)
    {
        if (is_string($ch33details)) {
            $this->_ch33details = $ch33details;
        }
    }
    public function setCh34($ch34)
    {
        if (is_string($ch34)) {
            $this->_ch34 = $ch34;
        }
    }
    public function setCh34details($ch34details)
    {
        if (is_string($ch34details)) {
            $this->_ch34details = $ch34details;
        }
    }
    public function setCh35($ch35)
    {
        if (is_string($ch35)) {
            $this->_ch35 = $ch35;
        }
    }
    public function setCh35details($ch35details)
    {
        if (is_string($ch35details)) {
            $this->_ch35details = $ch35details;
        }
    }
    public function setCh36($ch36)
    {
        if (is_string($ch36)) {
            $this->_ch36 = $ch36;
        }
    }
    public function setCh36details($ch36details)
    {
        if (is_string($ch36details)) {
            $this->_ch36details = $ch36details;
        }
    }
    public function setCh37($ch37)
    {
        if (is_string($ch37)) {
            $this->_ch37 = $ch37;
        }
    }
    public function setCh37details($ch37details)
    {
        if (is_string($ch37details)) {
            $this->_ch37details = $ch37details;
        }
    }
    public function setCh38($ch38)
    {
        if (is_string($ch38)) {
            $this->_ch38 = $ch38;
        }
    }
    public function setCh38details($ch38details)
    {
        if (is_string($ch38details)) {
            $this->_ch38details = $ch38details;
        }
    }
    public function setCh39($ch39)
    {
        if (is_string($ch39)) {
            $this->_ch39 = $ch39;
        }
    }
    public function setCh39details($ch39details)
    {
        if (is_string($ch39details)) {
            $this->_ch39details = $ch39details;
        }
    }
    public function setCh40($ch40)
    {
        if (is_string($ch40)) {
            $this->_ch40 = $ch40;
        }
    }
    public function setCh40details($ch40details)
    {
        if (is_string($ch40details)) {
            $this->_ch40details = $ch40details;
        }
    }
    public function setCh41($ch41)
    {
        if (is_string($ch41)) {
            $this->_ch41 = $ch41;
        }
    }
    public function setCh41details($ch41details)
    {
        if (is_string($ch41details)) {
            $this->_ch41details = $ch41details;
        }
    }
    public function setCh42($ch42)
    {
        if (is_string($ch42)) {
            $this->_ch42 = $ch42;
        }
    }
    public function setCh42details($ch42details)
    {
        if (is_string($ch42details)) {
            $this->_ch42details = $ch42details;
        }
    }
    public function setCh43($ch43)
    {
        if (is_string($ch43)) {
            $this->_ch43 = $ch43;
        }
    }
    public function setCh43details($ch43details)
    {
        if (is_string($ch43details)) {
            $this->_ch43details = $ch43details;
        }
    }
    public function setCh44($ch44)
    {
        if (is_string($ch44)) {
            $this->_ch44 = $ch44;
        }
    }
    public function setCh44details($ch44details)
    {
        if (is_string($ch44details)) {
            $this->_ch44details = $ch44details;
        }
    }
    public function setCh45($ch45)
    {
        if (is_string($ch45)) {
            $this->_ch45 = $ch45;
        }
    }
    public function setCh45details($ch45details)
    {
        if (is_string($ch45details)) {
            $this->_ch45details = $ch45details;
        }
    }
    public function setCh46($ch46)
    {
        if (is_string($ch46)) {
            $this->_ch46 = $ch46;
        }
    }
    public function setCh46details($ch46details)
    {
        if (is_string($ch46details)) {
            $this->_ch46details = $ch46details;
        }
    }
    public function setCh47($ch47)
    {
        if (is_string($ch47)) {
            $this->_ch47 = $ch47;
        }
    }
    public function setCh47details($ch47details)
    {
        if (is_string($ch47details)) {
            $this->_ch47details = $ch47details;
        }
    }
    public function setCh48($ch48)
    {
        if (is_string($ch48)) {
            $this->_ch48 = $ch48;
        }
    }
    public function setCh48details($ch48details)
    {
        if (is_string($ch48details)) {
            $this->_ch48details = $ch48details;
        }
    }
    public function setCh49($ch49)
    {
        if (is_string($ch49)) {
            $this->_ch49 = $ch49;
        }
    }
    public function setCh49details($ch49details)
    {
        if (is_string($ch49details)) {
            $this->_ch49details = $ch49details;
        }
    }
    public function setCh50($ch50)
    {
        if (is_string($ch50)) {
            $this->_ch50 = $ch50;
        }
    }
    public function setCh50details($ch50details)
    {
        if (is_string($ch50details)) {
            $this->_ch50details = $ch50details;
        }
    }
    public function setCh51($ch51)
    {
        if (is_string($ch51)) {
            $this->_ch51 = $ch51;
        }
    }
    public function setCh51details($ch51details)
    {
        if (is_string($ch51details)) {
            $this->_ch51details = $ch51details;
        }
    }
    public function setCh52($ch52)
    {
        if (is_string($ch52)) {
            $this->_ch52 = $ch52;
        }
    }
    public function setCh52details($ch52details)
    {
        if (is_string($ch52details)) {
            $this->_ch52details = $ch52details;
        }
    }
    public function setCh53($ch53)
    {
        if (is_string($ch53)) {
            $this->_ch53 = $ch53;
        }
    }
    public function setCh53details($ch53details)
    {
        if (is_string($ch53details)) {
            $this->_ch53details = $ch53details;
        }
    }
    public function setCh54($ch54)
    {
        if (is_string($ch54)) {
            $this->_ch54 = $ch54;
        }
    }
    public function setCh54details($ch54details)
    {
        if (is_string($ch54details)) {
            $this->_ch54details = $ch54details;
        }
    }
    public function setCh55($ch55)
    {
        if (is_string($ch55)) {
            $this->_ch55 = $ch55;
        }
    }
    public function setCh55details($ch55details)
    {
        if (is_string($ch55details)) {
            $this->_ch55details = $ch55details;
        }
    }
    public function setCh56($ch56)
    {
        if (is_string($ch56)) {
            $this->_ch56 = $ch56;
        }
    }
    public function setCh56details($ch56details)
    {
        if (is_string($ch56details)) {
            $this->_ch56details = $ch56details;
        }
    }
    public function setCh57($ch57)
    {
        if (is_string($ch57)) {
            $this->_ch57 = $ch57;
        }
    }
    public function setCh57details($ch57details)
    {
        if (is_string($ch57details)) {
            $this->_ch57details = $ch57details;
        }
    }
    public function setCh58($ch58)
    {
        if (is_string($ch58)) {
            $this->_ch58 = $ch58;
        }
    }
    public function setCh58details($ch58details)
    {
        if (is_string($ch58details)) {
            $this->_ch58details = $ch58details;
        }
    }
    public function setCh59($ch59)
    {
        if (is_string($ch59)) {
            $this->_ch59 = $ch59;
        }
    }
    public function setCh59details($ch59details)
    {
        if (is_string($ch59details)) {
            $this->_ch59details = $ch59details;
        }
    }
    public function setCh60($ch60)
    {
        if (is_string($ch60)) {
            $this->_ch60 = $ch60;
        }
    }
    public function setCh60details($ch60details)
    {
        if (is_string($ch60details)) {
            $this->_ch60details = $ch60details;
        }
    }
    public function setCh61($ch61)
    {
        if (is_string($ch61)) {
            $this->_ch61 = $ch61;
        }
    }
    public function setCh61details($ch61details)
    {
        if (is_string($ch61details)) {
            $this->_ch61details = $ch61details;
        }
    }
    public function setCh62($ch62)
    {
        if (is_string($ch62)) {
            $this->_ch62 = $ch62;
        }
    }
    public function setCh62details($ch62details)
    {
        if (is_string($ch62details)) {
            $this->_ch62details = $ch62details;
        }
    }
    public function setCh63($ch63)
    {
        if (is_string($ch63)) {
            $this->_ch63 = $ch63;
        }
    }
    public function setCh63details($ch63details)
    {
        if (is_string($ch63details)) {
            $this->_ch63details = $ch63details;
        }
    }
    public function setCh64($ch64)
    {
        if (is_string($ch64)) {
            $this->_ch64 = $ch64;
        }
    }
    public function setCh64details($ch64details)
    {
        if (is_string($ch64details)) {
            $this->_ch64details = $ch64details;
        }
    }
    public function setCh65($ch65)
    {
        if (is_string($ch65)) {
            $this->_ch65 = $ch65;
        }
    }
    public function setCh65details($ch65details)
    {
        if (is_string($ch65details)) {
            $this->_ch65details = $ch65details;
        }
    }
    public function setCh66($ch66)
    {
        if (is_string($ch66)) {
            $this->_ch66 = $ch66;
        }
    }
    public function setCh66details($ch66details)
    {
        if (is_string($ch66details)) {
            $this->_ch66details = $ch66details;
        }
    }
    public function setCh67($ch67)
    {
        if (is_string($ch67)) {
            $this->_ch67 = $ch67;
        }
    }
    public function setCh67details($ch67details)
    {
        if (is_string($ch67details)) {
            $this->_ch67details = $ch67details;
        }
    }
    public function setCh68($ch68)
    {
        if (is_string($ch68)) {
            $this->_ch68 = $ch68;
        }
    }
    public function setCh68details($ch68details)
    {
        if (is_string($ch68details)) {
            $this->_ch68details = $ch68details;
        }
    }
    public function setCh69($ch69)
    {
        if (is_string($ch69)) {
            $this->_ch69 = $ch69;
        }
    }
    public function setCh69details($ch69details)
    {
        if (is_string($ch69details)) {
            $this->_ch69details = $ch69details;
        }
    }
    public function setCh70($ch70)
    {
        if (is_string($ch70)) {
            $this->_ch70 = $ch70;
        }
    }
    public function setCh70details($ch70details)
    {
        if (is_string($ch70details)) {
            $this->_ch70details = $ch70details;
        }
    }
    public function setCh71($ch71)
    {
        if (is_string($ch71)) {
            $this->_ch71 = $ch71;
        }
    }
    public function setCh71details($ch71details)
    {
        if (is_string($ch71details)) {
            $this->_ch71details = $ch71details;
        }
    }
    public function setCh72($ch72)
    {
        if (is_string($ch72)) {
            $this->_ch72 = $ch72;
        }
    }
    public function setCh72details($ch72details)
    {
        if (is_string($ch72details)) {
            $this->_ch72details = $ch72details;
        }
    }
    public function setCh73($ch73)
    {
        if (is_string($ch73)) {
            $this->_ch73 = $ch73;
        }
    }
    public function setCh73details($ch73details)
    {
        if (is_string($ch73details)) {
            $this->_ch73details = $ch73details;
        }
    }
    public function setCh74($ch74)
    {
        if (is_string($ch74)) {
            $this->_ch74 = $ch74;
        }
    }
    public function setCh74details($ch74details)
    {
        if (is_string($ch74details)) {
            $this->_ch74details = $ch74details;
        }
    }
    public function setCh75($ch75)
    {
        if (is_string($ch75)) {
            $this->_ch75 = $ch75;
        }
    }
    public function setCh75details($ch75details)
    {
        if (is_string($ch75details)) {
            $this->_ch75details = $ch75details;
        }
    }
    public function setCh76($ch76)
    {
        if (is_string($ch76)) {
            $this->_ch76 = $ch76;
        }
    }
    public function setCh76details($ch76details)
    {
        if (is_string($ch76details)) {
            $this->_ch76details = $ch76details;
        }
    }
    public function setCh77($ch77)
    {
        if (is_string($ch77)) {
            $this->_ch77 = $ch77;
        }
    }
    public function setCh77details($ch77details)
    {
        if (is_string($ch77details)) {
            $this->_ch77details = $ch77details;
        }
    }
    public function setCh78($ch78)
    {
        if (is_string($ch78)) {
            $this->_ch78 = $ch78;
        }
    }
    public function setCh78details($ch78details)
    {
        if (is_string($ch78details)) {
            $this->_ch78details = $ch78details;
        }
    }
    public function setCh79($ch79)
    {
        if (is_string($ch79)) {
            $this->_ch79 = $ch79;
        }
    }
    public function setCh79details($ch79details)
    {
        if (is_string($ch79details)) {
            $this->_ch79details = $ch79details;
        }
    }
    public function setCh80($ch80)
    {
        if (is_string($ch80)) {
            $this->_ch80 = $ch80;
        }
    }
    public function setCh80details($ch80details)
    {
        if (is_string($ch80details)) {
            $this->_ch80details = $ch80details;
        }
    }
    public function setCh81($ch81)
    {
        if (is_string($ch81)) {
            $this->_ch81 = $ch81;
        }
    }
    public function setCh81details($ch81details)
    {
        if (is_string($ch81details)) {
            $this->_ch81details = $ch81details;
        }
    }
    public function setCh82($ch82)
    {
        if (is_string($ch82)) {
            $this->_ch82 = $ch82;
        }
    }
    public function setCh82details($ch82details)
    {
        if (is_string($ch82details)) {
            $this->_ch82details = $ch82details;
        }
    }
    public function setCh83($ch83)
    {
        if (is_string($ch83)) {
            $this->_ch83 = $ch83;
        }
    }
    public function setCh83details($ch83details)
    {
        if (is_string($ch83details)) {
            $this->_ch83details = $ch83details;
        }
    }
    public function setCh84($ch84)
    {
        if (is_string($ch84)) {
            $this->_ch84 = $ch84;
        }
    }
    public function setCh84details($ch84details)
    {
        if (is_string($ch84details)) {
            $this->_ch84details = $ch84details;
        }
    }
    public function setCh85($ch85)
    {
        if (is_string($ch85)) {
            $this->_ch85 = $ch85;
        }
    }
    public function setCh85details($ch85details)
    {
        if (is_string($ch85details)) {
            $this->_ch85details = $ch85details;
        }
    }
    public function setCh86($ch86)
    {
        if (is_string($ch86)) {
            $this->_ch86 = $ch86;
        }
    }
    public function setCh86details($ch86details)
    {
        if (is_string($ch86details)) {
            $this->_ch86details = $ch86details;
        }
    }
    public function setCh87($ch87)
    {
        if (is_string($ch87)) {
            $this->_ch87 = $ch87;
        }
    }
    public function setCh87details($ch87details)
    {
        if (is_string($ch87details)) {
            $this->_ch87details = $ch87details;
        }
    }
    public function setCh88($ch88)
    {
        if (is_string($ch88)) {
            $this->_ch88 = $ch88;
        }
    }
    public function setCh88details($ch88details)
    {
        if (is_string($ch88details)) {
            $this->_ch88details = $ch88details;
        }
    }
    public function setCh89($ch89)
    {
        if (is_string($ch89)) {
            $this->_ch89 = $ch89;
        }
    }
    public function setCh89details($ch89details)
    {
        if (is_string($ch89details)) {
            $this->_ch89details = $ch89details;
        }
    }
    public function setCh90($ch90)
    {
        if (is_string($ch90)) {
            $this->_ch90 = $ch90;
        }
    }
    public function setCh90details($ch90details)
    {
        if (is_string($ch90details)) {
            $this->_ch90details = $ch90details;
        }
    }
    public function setCh91($ch91)
    {
        if (is_string($ch91)) {
            $this->_ch91 = $ch91;
        }
    }
    public function setCh91details($ch91details)
    {
        if (is_string($ch91details)) {
            $this->_ch91details = $ch91details;
        }
    }
    public function setCh92($ch92)
    {
        if (is_string($ch92)) {
            $this->_ch92 = $ch92;
        }
    }
    public function setCh92details($ch92details)
    {
        if (is_string($ch92details)) {
            $this->_ch92details = $ch92details;
        }
    }
    public function setCh93($ch93)
    {
        if (is_string($ch93)) {
            $this->_ch93 = $ch93;
        }
    }
    public function setCh93details($ch93details)
    {
        if (is_string($ch93details)) {
            $this->_ch93details = $ch93details;
        }
    }
    public function setCh94($ch94)
    {
        if (is_string($ch94)) {
            $this->_ch94 = $ch94;
        }
    }
    public function setCh94details($ch94details)
    {
        if (is_string($ch94details)) {
            $this->_ch94details = $ch94details;
        }
    }
    public function setCh95($ch95)
    {
        if (is_string($ch95)) {
            $this->_ch95 = $ch95;
        }
    }
    public function setCh95details($ch95details)
    {
        if (is_string($ch95details)) {
            $this->_ch95details = $ch95details;
        }
    }
    public function setCh96($ch96)
    {
        if (is_string($ch96)) {
            $this->_ch96 = $ch96;
        }
    }
    public function setCh96details($ch96details)
    {
        if (is_string($ch96details)) {
            $this->_ch96details = $ch96details;
        }
    }
    public function setCh97($ch97)
    {
        if (is_string($ch97)) {
            $this->_ch97 = $ch97;
        }
    }
    public function setCh97details($ch97details)
    {
        if (is_string($ch97details)) {
            $this->_ch97details = $ch97details;
        }
    }
    public function setCh98($ch98)
    {
        if (is_string($ch98)) {
            $this->_ch98 = $ch98;
        }
    }
    public function setCh98details($ch98details)
    {
        if (is_string($ch98details)) {
            $this->_ch98details = $ch98details;
        }
    }
    public function setCh99($ch99)
    {
        if (is_string($ch99)) {
            $this->_ch99 = $ch99;
        }
    }
    public function setCh99details($ch99details)
    {
        if (is_string($ch99details)) {
            $this->_ch99details = $ch99details;
        }
    }
    public function setCh100($ch100)
    {
        if (is_string($ch100)) {
            $this->_ch100 = $ch100;
        }
    }
    public function setCh100details($ch100details)
    {
        if (is_string($ch100details)) {
            $this->_ch100details = $ch100details;
        }
    }
    public function setCh101($ch101)
    {
        if (is_string($ch101)) {
            $this->_ch101 = $ch101;
        }
    }
    public function setCh101details($ch101details)
    {
        if (is_string($ch101details)) {
            $this->_ch101details = $ch101details;
        }
    }
    public function setCh102($ch102)
    {
        if (is_string($ch102)) {
            $this->_ch102 = $ch102;
        }
    }
    public function setCh102details($ch102details)
    {
        if (is_string($ch102details)) {
            $this->_ch102details = $ch102details;
        }
    }
    public function setCh103($ch103)
    {
        if (is_string($ch103)) {
            $this->_ch103 = $ch103;
        }
    }
    public function setCh103details($ch103details)
    {
        if (is_string($ch103details)) {
            $this->_ch103details = $ch103details;
        }
    }
    public function setCh104($ch104)
    {
        if (is_string($ch104)) {
            $this->_ch104 = $ch104;
        }
    }
    public function setCh104details($ch104details)
    {
        if (is_string($ch104details)) {
            $this->_ch104details = $ch104details;
        }
    }
    public function setCh105($ch105)
    {
        if (is_string($ch105)) {
            $this->_ch105 = $ch105;
        }
    }
    public function setCh105details($ch105details)
    {
        if (is_string($ch105details)) {
            $this->_ch105details = $ch105details;
        }
    }
    public function setCh106($ch106)
    {
        if (is_string($ch106)) {
            $this->_ch106 = $ch106;
        }
    }
    public function setCh106details($ch106details)
    {
        if (is_string($ch106details)) {
            $this->_ch106details = $ch106details;
        }
    }
    public function setCh107($ch107)
    {
        if (is_string($ch107)) {
            $this->_ch107 = $ch107;
        }
    }
    public function setCh107details($ch107details)
    {
        if (is_string($ch107details)) {
            $this->_ch107details = $ch107details;
        }
    }
    public function setCh108($ch108)
    {
        if (is_string($ch108)) {
            $this->_ch108 = $ch108;
        }
    }
    public function setCh108details($ch108details)
    {
        if (is_string($ch108details)) {
            $this->_ch108details = $ch108details;
        }
    }
    public function setCh109($ch109)
    {
        if (is_string($ch109)) {
            $this->_ch109 = $ch109;
        }
    }
    public function setCh109details($ch109details)
    {
        if (is_string($ch109details)) {
            $this->_ch109details = $ch109details;
        }
    }
    public function setCh110($ch110)
    {
        if (is_string($ch110)) {
            $this->_ch110 = $ch110;
        }
    }
    public function setCh110details($ch110details)
    {
        if (is_string($ch110details)) {
            $this->_ch110details = $ch110details;
        }
    }
    public function setCh111($ch111)
    {
        if (is_string($ch111)) {
            $this->_ch111 = $ch111;
        }
    }
    public function setCh111details($ch111details)
    {
        if (is_string($ch111details)) {
            $this->_ch111details = $ch111details;
        }
    }
    public function setCh112($ch112)
    {
        if (is_string($ch112)) {
            $this->_ch112 = $ch112;
        }
    }
    public function setCh112details($ch112details)
    {
        if (is_string($ch112details)) {
            $this->_ch112details = $ch112details;
        }
    }
    public function setCh113($ch113)
    {
        if (is_string($ch113)) {
            $this->_ch113 = $ch113;
        }
    }
    public function setCh113details($ch113details)
    {
        if (is_string($ch113details)) {
            $this->_ch113details = $ch113details;
        }
    }
    public function setCh114($ch114)
    {
        if (is_string($ch114)) {
            $this->_ch114 = $ch114;
        }
    }
    public function setCh114details($ch114details)
    {
        if (is_string($ch114details)) {
            $this->_ch114details = $ch114details;
        }
    }
    public function setCh115($ch115)
    {
        if (is_string($ch115)) {
            $this->_ch115 = $ch115;
        }
    }
    public function setCh115details($ch115details)
    {
        if (is_string($ch115details)) {
            $this->_ch115details = $ch115details;
        }
    }
    public function setCh116($ch116)
    {
        if (is_string($ch116)) {
            $this->_ch116 = $ch116;
        }
    }
    public function setCh116details($ch116details)
    {
        if (is_string($ch116details)) {
            $this->_ch116details = $ch116details;
        }
    }
    public function setCh117($ch117)
    {
        if (is_string($ch117)) {
            $this->_ch117 = $ch117;
        }
    }
    public function setCh117details($ch117details)
    {
        if (is_string($ch117details)) {
            $this->_ch117details = $ch117details;
        }
    }
    public function setCh118($ch118)
    {
        if (is_string($ch118)) {
            $this->_ch118 = $ch118;
        }
    }
    public function setCh118details($ch118details)
    {
        if (is_string($ch118details)) {
            $this->_ch118details = $ch118details;
        }
    }
    public function setCh119($ch119)
    {
        if (is_string($ch119)) {
            $this->_ch119 = $ch119;
        }
    }
    public function setCh119details($ch119details)
    {
        if (is_string($ch119details)) {
            $this->_ch119details = $ch119details;
        }
    }
    public function setCh120($ch120)
    {
        if (is_string($ch120)) {
            $this->_ch120 = $ch120;
        }
    }
    public function setCh120details($ch120details)
    {
        if (is_string($ch120details)) {
            $this->_ch120details = $ch120details;
        }
    }
    public function setCh121($ch121)
    {
        if (is_string($ch121)) {
            $this->_ch121 = $ch121;
        }
    }
    public function setCh121details($ch121details)
    {
        if (is_string($ch121details)) {
            $this->_ch121details = $ch121details;
        }
    }
    public function setCh122($ch122)
    {
        if (is_string($ch122)) {
            $this->_ch122 = $ch122;
        }
    }
    public function setCh122details($ch122details)
    {
        if (is_string($ch122details)) {
            $this->_ch122details = $ch122details;
        }
    }
    public function setCh123($ch123)
    {
        if (is_string($ch123)) {
            $this->_ch123 = $ch123;
        }
    }
    public function setCh123details($ch123details)
    {
        if (is_string($ch123details)) {
            $this->_ch123details = $ch123details;
        }
    }
    public function setCh124($ch124)
    {
        if (is_string($ch124)) {
            $this->_ch124 = $ch124;
        }
    }
    public function setCh124details($ch124details)
    {
        if (is_string($ch124details)) {
            $this->_ch124details = $ch124details;
        }
    }
    public function setCh125($ch125)
    {
        if (is_string($ch125)) {
            $this->_ch125 = $ch125;
        }
    }
    public function setCh125details($ch125details)
    {
        if (is_string($ch125details)) {
            $this->_ch125details = $ch125details;
        }
    }
    public function setCh126($ch126)
    {
        if (is_string($ch126)) {
            $this->_ch126 = $ch126;
        }
    }
    public function setCh126details($ch126details)
    {
        if (is_string($ch126details)) {
            $this->_ch126details = $ch126details;
        }
    }
    public function setCh127($ch127)
    {
        if (is_string($ch127)) {
            $this->_ch127 = $ch127;
        }
    }
    public function setCh127details($ch127details)
    {
        if (is_string($ch127details)) {
            $this->_ch127details = $ch127details;
        }
    }
    public function setCh128($ch128)
    {
        if (is_string($ch128)) {
            $this->_ch128 = $ch128;
        }
    }
    public function setCh128details($ch128details)
    {
        if (is_string($ch128details)) {
            $this->_ch128details = $ch128details;
        }
    }
    public function setCh129($ch129)
    {
        if (is_string($ch129)) {
            $this->_ch129 = $ch129;
        }
    }
    public function setCh129details($ch129details)
    {
        if (is_string($ch129details)) {
            $this->_ch129details = $ch129details;
        }
    }
    public function setCh130($ch130)
    {
        if (is_string($ch130)) {
            $this->_ch130 = $ch130;
        }
    }
    public function setCh130details($ch130details)
    {
        if (is_string($ch130details)) {
            $this->_ch130details = $ch130details;
        }
    }
    public function setCh131($ch131)
    {
        if (is_string($ch131)) {
            $this->_ch131 = $ch131;
        }
    }
    public function setCh131details($ch131details)
    {
        if (is_string($ch131details)) {
            $this->_ch131details = $ch131details;
        }
    }
    public function setCh132($ch132)
    {
        if (is_string($ch132)) {
            $this->_ch132 = $ch132;
        }
    }
    public function setCh132details($ch132details)
    {
        if (is_string($ch132details)) {
            $this->_ch132details = $ch132details;
        }
    }
    public function setCh133($ch133)
    {
        if (is_string($ch133)) {
            $this->_ch133 = $ch133;
        }
    }
    public function setCh133details($ch133details)
    {
        if (is_string($ch133details)) {
            $this->_ch133details = $ch133details;
        }
    }
    public function setCh134($ch134)
    {
        if (is_string($ch134)) {
            $this->_ch134 = $ch134;
        }
    }
    public function setCh134details($ch134details)
    {
        if (is_string($ch134details)) {
            $this->_ch134details = $ch134details;
        }
    }
    public function setCh135($ch135)
    {
        if (is_string($ch135)) {
            $this->_ch135 = $ch135;
        }
    }
    public function setCh135details($ch135details)
    {
        if (is_string($ch135details)) {
            $this->_ch135details = $ch135details;
        }
    }
    public function setCh136($ch136)
    {
        if (is_string($ch136)) {
            $this->_ch136 = $ch136;
        }
    }
    public function setCh136details($ch136details)
    {
        if (is_string($ch136details)) {
            $this->_ch136details = $ch136details;
        }
    }
    public function setCh137($ch137)
    {
        if (is_string($ch137)) {
            $this->_ch137 = $ch137;
        }
    }
    public function setCh137details($ch137details)
    {
        if (is_string($ch137details)) {
            $this->_ch137details = $ch137details;
        }
    }
    public function setCh138($ch138)
    {
        if (is_string($ch138)) {
            $this->_ch138 = $ch138;
        }
    }
    public function setCh138details($ch138details)
    {
        if (is_string($ch138details)) {
            $this->_ch138details = $ch138details;
        }
    }
    public function setCh139($ch139)
    {
        if (is_string($ch139)) {
            $this->_ch139 = $ch139;
        }
    }
    public function setCh139details($ch139details)
    {
        if (is_string($ch139details)) {
            $this->_ch139details = $ch139details;
        }
    }
    public function setCh140($ch140)
    {
        if (is_string($ch140)) {
            $this->_ch140 = $ch140;
        }
    }
    public function setCh140details($ch140details)
    {
        if (is_string($ch140details)) {
            $this->_ch140details = $ch140details;
        }
    }
    public function setCh141($ch141)
    {
        if (is_string($ch141)) {
            $this->_ch141 = $ch141;
        }
    }
    public function setCh141details($ch141details)
    {
        if (is_string($ch141details)) {
            $this->_ch141details = $ch141details;
        }
    }
    public function setCh142($ch142)
    {
        if (is_string($ch142)) {
            $this->_ch142 = $ch142;
        }
    }
    public function setCh142details($ch142details)
    {
        if (is_string($ch142details)) {
            $this->_ch142details = $ch142details;
        }
    }
    public function setCh143($ch143)
    {
        if (is_string($ch143)) {
            $this->_ch143 = $ch143;
        }
    }
    public function setCh143details($ch143details)
    {
        if (is_string($ch143details)) {
            $this->_ch143details = $ch143details;
        }
    }
    public function setCh144($ch144)
    {
        if (is_string($ch144)) {
            $this->_ch144 = $ch144;
        }
    }
    public function setCh144details($ch144details)
    {
        if (is_string($ch144details)) {
            $this->_ch144details = $ch144details;
        }
    }
    public function setCh145($ch145)
    {
        if (is_string($ch145)) {
            $this->_ch145 = $ch145;
        }
    }
    public function setCh145details($ch145details)
    {
        if (is_string($ch145details)) {
            $this->_ch145details = $ch145details;
        }
    }
    public function setCh146($ch146)
    {
        if (is_string($ch146)) {
            $this->_ch146 = $ch146;
        }
    }
    public function setCh146details($ch146details)
    {
        if (is_string($ch146details)) {
            $this->_ch146details = $ch146details;
        }
    }
    public function setCh147($ch147)
    {
        if (is_string($ch147)) {
            $this->_ch147 = $ch147;
        }
    }
    public function setCh147details($ch147details)
    {
        if (is_string($ch147details)) {
            $this->_ch147details = $ch147details;
        }
    }
    public function setCh148($ch148)
    {
        if (is_string($ch148)) {
            $this->_ch148 = $ch148;
        }
    }
    public function setCh148details($ch148details)
    {
        if (is_string($ch148details)) {
            $this->_ch148details = $ch148details;
        }
    }
    public function setCh149($ch149)
    {
        if (is_string($ch149)) {
            $this->_ch149 = $ch149;
        }
    }
    public function setCh149details($ch149details)
    {
        if (is_string($ch149details)) {
            $this->_ch149details = $ch149details;
        }
    }
    public function setCh150($ch150)
    {
        if (is_string($ch150)) {
            $this->_ch150 = $ch150;
        }
    }
    public function setCh150details($ch150details)
    {
        if (is_string($ch150details)) {
            $this->_ch150details = $ch150details;
        }
    }
    public function setCh151($ch151)
    {
        if (is_string($ch151)) {
            $this->_ch151 = $ch151;
        }
    }
    public function setCh151details($ch151details)
    {
        if (is_string($ch151details)) {
            $this->_ch151details = $ch151details;
        }
    }
    public function setCh152($ch152)
    {
        if (is_string($ch152)) {
            $this->_ch152 = $ch152;
        }
    }
    public function setCh152details($ch152details)
    {
        if (is_string($ch152details)) {
            $this->_ch152details = $ch152details;
        }
    }
    public function setCh153($ch153)
    {
        if (is_string($ch153)) {
            $this->_ch153 = $ch153;
        }
    }
    public function setCh153details($ch153details)
    {
        if (is_string($ch153details)) {
            $this->_ch153details = $ch153details;
        }
    }
    public function setCh154($ch154)
    {
        if (is_string($ch154)) {
            $this->_ch154 = $ch154;
        }
    }
    public function setCh154details($ch154details)
    {
        if (is_string($ch154details)) {
            $this->_ch154details = $ch154details;
        }
    }
    public function setCh155($ch155)
    {
        if (is_string($ch155)) {
            $this->_ch155 = $ch155;
        }
    }
    public function setCh155details($ch155details)
    {
        if (is_string($ch155details)) {
            $this->_ch155details = $ch155details;
        }
    }
    public function setCh156($ch156)
    {
        if (is_string($ch156)) {
            $this->_ch156 = $ch156;
        }
    }
    public function setCh156details($ch156details)
    {
        if (is_string($ch156details)) {
            $this->_ch156details = $ch156details;
        }
    }
    public function setCh157($ch157)
    {
        if (is_string($ch157)) {
            $this->_ch157 = $ch157;
        }
    }
    public function setCh157details($ch157details)
    {
        if (is_string($ch157details)) {
            $this->_ch157details = $ch157details;
        }
    }
    public function setCh158($ch158)
    {
        if (is_string($ch158)) {
            $this->_ch158 = $ch158;
        }
    }
    public function setCh158details($ch158details)
    {
        if (is_string($ch158details)) {
            $this->_ch158details = $ch158details;
        }
    }
    public function setCh159($ch159)
    {
        if (is_string($ch159)) {
            $this->_ch159 = $ch159;
        }
    }
    public function setCh159details($ch159details)
    {
        if (is_string($ch159details)) {
            $this->_ch159details = $ch159details;
        }
    }
    public function setCh160($ch160)
    {
        if (is_string($ch160)) {
            $this->_ch160 = $ch160;
        }
    }
    public function setCh160details($ch160details)
    {
        if (is_string($ch160details)) {
            $this->_ch160details = $ch160details;
        }
    }
    public function setCh161($ch161)
    {
        if (is_string($ch161)) {
            $this->_ch161 = $ch161;
        }
    }
    public function setCh161details($ch161details)
    {
        if (is_string($ch161details)) {
            $this->_ch161details = $ch161details;
        }
    }
    public function setCh162($ch162)
    {
        if (is_string($ch162)) {
            $this->_ch162 = $ch162;
        }
    }
    public function setCh162details($ch162details)
    {
        if (is_string($ch162details)) {
            $this->_ch162details = $ch162details;
        }
    }
    public function setCh163($ch163)
    {
        if (is_string($ch163)) {
            $this->_ch163 = $ch163;
        }
    }
    public function setCh163details($ch163details)
    {
        if (is_string($ch163details)) {
            $this->_ch163details = $ch163details;
        }
    }
    public function setCh164($ch164)
    {
        if (is_string($ch164)) {
            $this->_ch164 = $ch164;
        }
    }
    public function setCh164details($ch164details)
    {
        if (is_string($ch164details)) {
            $this->_ch164details = $ch164details;
        }
    }
    public function setCh165($ch165)
    {
        if (is_string($ch165)) {
            $this->_ch165 = $ch165;
        }
    }
    public function setCh165details($ch165details)
    {
        if (is_string($ch165details)) {
            $this->_ch165details = $ch165details;
        }
    }
    public function setCh166($ch166)
    {
        if (is_string($ch166)) {
            $this->_ch166 = $ch166;
        }
    }
    public function setCh166details($ch166details)
    {
        if (is_string($ch166details)) {
            $this->_ch166details = $ch166details;
        }
    }
    public function setCh167($ch167)
    {
        if (is_string($ch167)) {
            $this->_ch167 = $ch167;
        }
    }
    public function setCh167details($ch167details)
    {
        if (is_string($ch167details)) {
            $this->_ch167details = $ch167details;
        }
    }
    public function setCh168($ch168)
    {
        if (is_string($ch168)) {
            $this->_ch168 = $ch168;
        }
    }
    public function setCh168details($ch168details)
    {
        if (is_string($ch168details)) {
            $this->_ch168details = $ch168details;
        }
    }
    public function setCh169($ch169)
    {
        if (is_string($ch169)) {
            $this->_ch169 = $ch169;
        }
    }
    public function setCh169details($ch169details)
    {
        if (is_string($ch169details)) {
            $this->_ch169details = $ch169details;
        }
    }
    public function setCh170($ch170)
    {
        if (is_string($ch170)) {
            $this->_ch170 = $ch170;
        }
    }
    public function setCh170details($ch170details)
    {
        if (is_string($ch170details)) {
            $this->_ch170details = $ch170details;
        }
    }
    public function setCh171($ch171)
    {
        if (is_string($ch171)) {
            $this->_ch171 = $ch171;
        }
    }
    public function setCh171details($ch171details)
    {
        if (is_string($ch171details)) {
            $this->_ch171details = $ch171details;
        }
    }
    public function setCh172($ch172)
    {
        if (is_string($ch172)) {
            $this->_ch172 = $ch172;
        }
    }
    public function setCh172details($ch172details)
    {
        if (is_string($ch172details)) {
            $this->_ch172details = $ch172details;
        }
    }
    public function setCh173($ch173)
    {
        if (is_string($ch173)) {
            $this->_ch173 = $ch173;
        }
    }
    public function setCh173details($ch173details)
    {
        if (is_string($ch173details)) {
            $this->_ch173details = $ch173details;
        }
    }
    public function setCh174($ch174)
    {
        if (is_string($ch174)) {
            $this->_ch174 = $ch174;
        }
    }
    public function setCh174details($ch174details)
    {
        if (is_string($ch174details)) {
            $this->_ch174details = $ch174details;
        }
    }
    public function setCh175($ch175)
    {
        if (is_string($ch175)) {
            $this->_ch175 = $ch175;
        }
    }
    public function setCh175details($ch175details)
    {
        if (is_string($ch175details)) {
            $this->_ch175details = $ch175details;
        }
    }
    public function setCh176($ch176)
    {
        if (is_string($ch176)) {
            $this->_ch176 = $ch176;
        }
    }
    public function setCh176details($ch176details)
    {
        if (is_string($ch176details)) {
            $this->_ch176details = $ch176details;
        }
    }
    public function setCh177($ch177)
    {
        if (is_string($ch177)) {
            $this->_ch177 = $ch177;
        }
    }
    public function setCh177details($ch177details)
    {
        if (is_string($ch177details)) {
            $this->_ch177details = $ch177details;
        }
    }
    public function setCh178($ch178)
    {
        if (is_string($ch178)) {
            $this->_ch178 = $ch178;
        }
    }
    public function setCh178details($ch178details)
    {
        if (is_string($ch178details)) {
            $this->_ch178details = $ch178details;
        }
    }
    public function setCh179($ch179)
    {
        if (is_string($ch179)) {
            $this->_ch179 = $ch179;
        }
    }
    public function setCh179details($ch179details)
    {
        if (is_string($ch179details)) {
            $this->_ch179details = $ch179details;
        }
    }
    public function setCh180($ch180)
    {
        if (is_string($ch180)) {
            $this->_ch180 = $ch180;
        }
    }
    public function setCh180details($ch180details)
    {
        if (is_string($ch180details)) {
            $this->_ch180details = $ch180details;
        }
    }
    public function setCh181($ch181)
    {
        if (is_string($ch181)) {
            $this->_ch181 = $ch181;
        }
    }
    public function setCh181details($ch181details)
    {
        if (is_string($ch181details)) {
            $this->_ch181details = $ch181details;
        }
    }
    public function setCh182($ch182)
    {
        if (is_string($ch182)) {
            $this->_ch182 = $ch182;
        }
    }
    public function setCh182details($ch182details)
    {
        if (is_string($ch182details)) {
            $this->_ch182details = $ch182details;
        }
    }
    public function setCh183($ch183)
    {
        if (is_string($ch183)) {
            $this->_ch183 = $ch183;
        }
    }
    public function setCh183details($ch183details)
    {
        if (is_string($ch183details)) {
            $this->_ch183details = $ch183details;
        }
    }
    public function setCh184($ch184)
    {
        if (is_string($ch184)) {
            $this->_ch184 = $ch184;
        }
    }
    public function setCh184details($ch184details)
    {
        if (is_string($ch184details)) {
            $this->_ch184details = $ch184details;
        }
    }
    public function setCh185($ch185)
    {
        if (is_string($ch185)) {
            $this->_ch185 = $ch185;
        }
    }
    public function setCh185details($ch185details)
    {
        if (is_string($ch185details)) {
            $this->_ch185details = $ch185details;
        }
    }
    public function setCh186($ch186)
    {
        if (is_string($ch186)) {
            $this->_ch186 = $ch186;
        }
    }
    public function setCh186details($ch186details)
    {
        if (is_string($ch186details)) {
            $this->_ch186details = $ch186details;
        }
    }
    public function setCh187($ch187)
    {
        if (is_string($ch187)) {
            $this->_ch187 = $ch187;
        }
    }
    public function setCh187details($ch187details)
    {
        if (is_string($ch187details)) {
            $this->_ch187details = $ch187details;
        }
    }
    public function setCh188($ch188)
    {
        if (is_string($ch188)) {
            $this->_ch188 = $ch188;
        }
    }
    public function setCh188details($ch188details)
    {
        if (is_string($ch188details)) {
            $this->_ch188details = $ch188details;
        }
    }
    public function setCh189($ch189)
    {
        if (is_string($ch189)) {
            $this->_ch189 = $ch189;
        }
    }
    public function setCh189details($ch189details)
    {
        if (is_string($ch189details)) {
            $this->_ch189details = $ch189details;
        }
    }
    public function setCh190($ch190)
    {
        if (is_string($ch190)) {
            $this->_ch190 = $ch190;
        }
    }
    public function setCh190details($ch190details)
    {
        if (is_string($ch190details)) {
            $this->_ch190details = $ch190details;
        }
    }
    public function setCh191($ch191)
    {
        if (is_string($ch191)) {
            $this->_ch191 = $ch191;
        }
    }
    public function setCh191details($ch191details)
    {
        if (is_string($ch191details)) {
            $this->_ch191details = $ch191details;
        }
    }
    public function setCh192($ch192)
    {
        if (is_string($ch192)) {
            $this->_ch192 = $ch192;
        }
    }
    public function setCh192details($ch192details)
    {
        if (is_string($ch192details)) {
            $this->_ch192details = $ch192details;
        }
    }
    public function setCh193($ch193)
    {
        if (is_string($ch193)) {
            $this->_ch193 = $ch193;
        }
    }
    public function setCh193details($ch193details)
    {
        if (is_string($ch193details)) {
            $this->_ch193details = $ch193details;
        }
    }
    public function setCh194($ch194)
    {
        if (is_string($ch194)) {
            $this->_ch194 = $ch194;
        }
    }
    public function setCh194details($ch194details)
    {
        if (is_string($ch194details)) {
            $this->_ch194details = $ch194details;
        }
    }
    public function setCh195($ch195)
    {
        if (is_string($ch195)) {
            $this->_ch195 = $ch195;
        }
    }
    public function setCh195details($ch195details)
    {
        if (is_string($ch195details)) {
            $this->_ch195details = $ch195details;
        }
    }
    public function setCh196($ch196)
    {
        if (is_string($ch196)) {
            $this->_ch196 = $ch196;
        }
    }
    public function setCh196details($ch196details)
    {
        if (is_string($ch196details)) {
            $this->_ch196details = $ch196details;
        }
    }
    public function setCh197($ch197)
    {
        if (is_string($ch197)) {
            $this->_ch197 = $ch197;
        }
    }
    public function setCh197details($ch197details)
    {
        if (is_string($ch197details)) {
            $this->_ch197details = $ch197details;
        }
    }
    public function setCh198($ch198)
    {
        if (is_string($ch198)) {
            $this->_ch198 = $ch198;
        }
    }
    public function setCh198details($ch198details)
    {
        if (is_string($ch198details)) {
            $this->_ch198details = $ch198details;
        }
    }
    public function setCh199($ch199)
    {
        if (is_string($ch199)) {
            $this->_ch199 = $ch199;
        }
    }
    public function setCh199details($ch199details)
    {
        if (is_string($ch199details)) {
            $this->_ch199details = $ch199details;
        }
    }
    public function setCh200($ch200)
    {
        if (is_string($ch200)) {
            $this->_ch200 = $ch200;
        }
    }
    public function setCh200details($ch200details)
    {
        if (is_string($ch200details)) {
            $this->_ch200details = $ch200details;
        }
    }
    public function setCh201($ch201)
    {
        if (is_string($ch201)) {
            $this->_ch201 = $ch201;
        }
    }
    public function setCh201details($ch201details)
    {
        if (is_string($ch201details)) {
            $this->_ch201details = $ch201details;
        }
    }
    public function setCh202($ch202)
    {
        if (is_string($ch202)) {
            $this->_ch202 = $ch202;
        }
    }
    public function setCh202details($ch202details)
    {
        if (is_string($ch202details)) {
            $this->_ch202details = $ch202details;
        }
    }
    public function setCh203($ch203)
    {
        if (is_string($ch203)) {
            $this->_ch203 = $ch203;
        }
    }
    public function setCh203details($ch203details)
    {
        if (is_string($ch203details)) {
            $this->_ch203details = $ch203details;
        }
    }
    public function setCh204($ch204)
    {
        if (is_string($ch204)) {
            $this->_ch204 = $ch204;
        }
    }
    public function setCh204details($ch204details)
    {
        if (is_string($ch204details)) {
            $this->_ch204details = $ch204details;
        }
    }
    public function setCh205($ch205)
    {
        if (is_string($ch205)) {
            $this->_ch205 = $ch205;
        }
    }
    public function setCh205details($ch205details)
    {
        if (is_string($ch205details)) {
            $this->_ch205details = $ch205details;
        }
    }
    public function setCh206($ch206)
    {
        if (is_string($ch206)) {
            $this->_ch206 = $ch206;
        }
    }
    public function setCh206details($ch206details)
    {
        if (is_string($ch206details)) {
            $this->_ch206details = $ch206details;
        }
    }
    public function setCh207($ch207)
    {
        if (is_string($ch207)) {
            $this->_ch207 = $ch207;
        }
    }
    public function setCh207details($ch207details)
    {
        if (is_string($ch207details)) {
            $this->_ch207details = $ch207details;
        }
    }
    public function setCh208($ch208)
    {
        if (is_string($ch208)) {
            $this->_ch208 = $ch208;
        }
    }
    public function setCh208details($ch208details)
    {
        if (is_string($ch208details)) {
            $this->_ch208details = $ch208details;
        }
    }
    public function setCh209($ch209)
    {
        if (is_string($ch209)) {
            $this->_ch209 = $ch209;
        }
    }
    public function setCh209details($ch209details)
    {
        if (is_string($ch209details)) {
            $this->_ch209details = $ch209details;
        }
    }
    public function setCh210($ch210)
    {
        if (is_string($ch210)) {
            $this->_ch210 = $ch210;
        }
    }
    public function setCh210details($ch210details)
    {
        if (is_string($ch210details)) {
            $this->_ch210details = $ch210details;
        }
    }
    public function setCh211($ch211)
    {
        if (is_string($ch211)) {
            $this->_ch211 = $ch211;
        }
    }
    public function setCh211details($ch211details)
    {
        if (is_string($ch211details)) {
            $this->_ch211details = $ch211details;
        }
    }
    public function setCh212($ch212)
    {
        if (is_string($ch212)) {
            $this->_ch212 = $ch212;
        }
    }
    public function setCh212details($ch212details)
    {
        if (is_string($ch212details)) {
            $this->_ch212details = $ch212details;
        }
    }
    public function setCh213($ch213)
    {
        if (is_string($ch213)) {
            $this->_ch213 = $ch213;
        }
    }
    public function setCh213details($ch213details)
    {
        if (is_string($ch213details)) {
            $this->_ch213details = $ch213details;
        }
    }
    public function setCh214($ch214)
    {
        if (is_string($ch214)) {
            $this->_ch214 = $ch214;
        }
    }
    public function setCh214details($ch214details)
    {
        if (is_string($ch214details)) {
            $this->_ch214details = $ch214details;
        }
    }
    public function setCh215($ch215)
    {
        if (is_string($ch215)) {
            $this->_ch215 = $ch215;
        }
    }
    public function setCh215details($ch215details)
    {
        if (is_string($ch215details)) {
            $this->_ch215details = $ch215details;
        }
    }
    public function setCh216($ch216)
    {
        if (is_string($ch216)) {
            $this->_ch216 = $ch216;
        }
    }
    public function setCh216details($ch216details)
    {
        if (is_string($ch216details)) {
            $this->_ch216details = $ch216details;
        }
    }
    public function setCh217($ch217)
    {
        if (is_string($ch217)) {
            $this->_ch217 = $ch217;
        }
    }
    public function setCh217details($ch217details)
    {
        if (is_string($ch217details)) {
            $this->_ch217details = $ch217details;
        }
    }
    public function setCh218($ch218)
    {
        if (is_string($ch218)) {
            $this->_ch218 = $ch218;
        }
    }
    public function setCh218details($ch218details)
    {
        if (is_string($ch218details)) {
            $this->_ch218details = $ch218details;
        }
    }
    public function setCh219($ch219)
    {
        if (is_string($ch219)) {
            $this->_ch219 = $ch219;
        }
    }
    public function setCh219details($ch219details)
    {
        if (is_string($ch219details)) {
            $this->_ch219details = $ch219details;
        }
    }
    public function setCh220($ch220)
    {
        if (is_string($ch220)) {
            $this->_ch220 = $ch220;
        }
    }
    public function setCh220details($ch220details)
    {
        if (is_string($ch220details)) {
            $this->_ch220details = $ch220details;
        }
    }
    public function setCh221($ch221)
    {
        if (is_string($ch221)) {
            $this->_ch221 = $ch221;
        }
    }
    public function setCh221details($ch221details)
    {
        if (is_string($ch221details)) {
            $this->_ch221details = $ch221details;
        }
    }
    public function setCh222($ch222)
    {
        if (is_string($ch222)) {
            $this->_ch222 = $ch222;
        }
    }
    public function setCh222details($ch222details)
    {
        if (is_string($ch222details)) {
            $this->_ch222details = $ch222details;
        }
    }
    public function setCh223($ch223)
    {
        if (is_string($ch223)) {
            $this->_ch223 = $ch223;
        }
    }
    public function setCh223details($ch223details)
    {
        if (is_string($ch223details)) {
            $this->_ch223details = $ch223details;
        }
    }
    public function setCh224($ch224)
    {
        if (is_string($ch224)) {
            $this->_ch224 = $ch224;
        }
    }
    public function setCh224details($ch224details)
    {
        if (is_string($ch224details)) {
            $this->_ch224details = $ch224details;
        }
    }
    public function setCh225($ch225)
    {
        if (is_string($ch225)) {
            $this->_ch225 = $ch225;
        }
    }
    public function setCh225details($ch225details)
    {
        if (is_string($ch225details)) {
            $this->_ch225details = $ch225details;
        }
    }
    public function setCh226($ch226)
    {
        if (is_string($ch226)) {
            $this->_ch226 = $ch226;
        }
    }
    public function setCh226details($ch226details)
    {
        if (is_string($ch226details)) {
            $this->_ch226details = $ch226details;
        }
    }
    public function setCh227($ch227)
    {
        if (is_string($ch227)) {
            $this->_ch227 = $ch227;
        }
    }
    public function setCh227details($ch227details)
    {
        if (is_string($ch227details)) {
            $this->_ch227details = $ch227details;
        }
    }
    public function setCh228($ch228)
    {
        if (is_string($ch228)) {
            $this->_ch228 = $ch228;
        }
    }
    public function setCh228details($ch228details)
    {
        if (is_string($ch228details)) {
            $this->_ch228details = $ch228details;
        }
    }
    public function setCh229($ch229)
    {
        if (is_string($ch229)) {
            $this->_ch229 = $ch229;
        }
    }
    public function setCh229details($ch229details)
    {
        if (is_string($ch229details)) {
            $this->_ch229details = $ch229details;
        }
    }
    public function setCh230($ch230)
    {
        if (is_string($ch230)) {
            $this->_ch230 = $ch230;
        }
    }
    public function setCh230details($ch230details)
    {
        if (is_string($ch230details)) {
            $this->_ch230details = $ch230details;
        }
    }
    public function setCh231($ch231)
    {
        if (is_string($ch231)) {
            $this->_ch231 = $ch231;
        }
    }
    public function setCh231details($ch231details)
    {
        if (is_string($ch231details)) {
            $this->_ch231details = $ch231details;
        }
    }
    public function setCh232($ch232)
    {
        if (is_string($ch232)) {
            $this->_ch232 = $ch232;
        }
    }
    public function setCh232details($ch232details)
    {
        if (is_string($ch232details)) {
            $this->_ch232details = $ch232details;
        }
    }
    public function setCh233($ch233)
    {
        if (is_string($ch233)) {
            $this->_ch233 = $ch233;
        }
    }
    public function setCh233details($ch233details)
    {
        if (is_string($ch233details)) {
            $this->_ch233details = $ch233details;
        }
    }
    public function setCh234($ch234)
    {
        if (is_string($ch234)) {
            $this->_ch234 = $ch234;
        }
    }
    public function setCh234details($ch234details)
    {
        if (is_string($ch234details)) {
            $this->_ch234details = $ch234details;
        }
    }
    public function setCh235($ch235)
    {
        if (is_string($ch235)) {
            $this->_ch235 = $ch235;
        }
    }
    public function setCh235details($ch235details)
    {
        if (is_string($ch235details)) {
            $this->_ch235details = $ch235details;
        }
    }
    public function setCh236($ch236)
    {
        if (is_string($ch236)) {
            $this->_ch236 = $ch236;
        }
    }
    public function setCh236details($ch236details)
    {
        if (is_string($ch236details)) {
            $this->_ch236details = $ch236details;
        }
    }
    public function setCh237($ch237)
    {
        if (is_string($ch237)) {
            $this->_ch237 = $ch237;
        }
    }
    public function setCh237details($ch237details)
    {
        if (is_string($ch237details)) {
            $this->_ch237details = $ch237details;
        }
    }
    public function setCh238($ch238)
    {
        if (is_string($ch238)) {
            $this->_ch238 = $ch238;
        }
    }
    public function setCh238details($ch238details)
    {
        if (is_string($ch238details)) {
            $this->_ch238details = $ch238details;
        }
    }
    public function setCh239($ch239)
    {
        if (is_string($ch239)) {
            $this->_ch239 = $ch239;
        }
    }
    public function setCh239details($ch239details)
    {
        if (is_string($ch239details)) {
            $this->_ch239details = $ch239details;
        }
    }
    public function setCh240($ch240)
    {
        if (is_string($ch240)) {
            $this->_ch240 = $ch240;
        }
    }
    public function setCh240details($ch240details)
    {
        if (is_string($ch240details)) {
            $this->_ch240details = $ch240details;
        }
    }
    public function setCh241($ch241)
    {
        if (is_string($ch241)) {
            $this->_ch241 = $ch241;
        }
    }
    public function setCh241details($ch241details)
    {
        if (is_string($ch241details)) {
            $this->_ch241details = $ch241details;
        }
    }
    public function setCh242($ch242)
    {
        if (is_string($ch242)) {
            $this->_ch242 = $ch242;
        }
    }
    public function setCh242details($ch242details)
    {
        if (is_string($ch242details)) {
            $this->_ch242details = $ch242details;
        }
    }
    public function setCh243($ch243)
    {
        if (is_string($ch243)) {
            $this->_ch243 = $ch243;
        }
    }
    public function setCh243details($ch243details)
    {
        if (is_string($ch243details)) {
            $this->_ch243details = $ch243details;
        }
    }
    public function setCh244($ch244)
    {
        if (is_string($ch244)) {
            $this->_ch244 = $ch244;
        }
    }
    public function setCh244details($ch244details)
    {
        if (is_string($ch244details)) {
            $this->_ch244details = $ch244details;
        }
    }
    public function setCh245($ch245)
    {
        if (is_string($ch245)) {
            $this->_ch245 = $ch245;
        }
    }
    public function setCh245details($ch245details)
    {
        if (is_string($ch245details)) {
            $this->_ch245details = $ch245details;
        }
    }
    public function setCh246($ch246)
    {
        if (is_string($ch246)) {
            $this->_ch246 = $ch246;
        }
    }
    public function setCh246details($ch246details)
    {
        if (is_string($ch246details)) {
            $this->_ch246details = $ch246details;
        }
    }
    public function setCh247($ch247)
    {
        if (is_string($ch247)) {
            $this->_ch247 = $ch247;
        }
    }
    public function setCh247details($ch247details)
    {
        if (is_string($ch247details)) {
            $this->_ch247details = $ch247details;
        }
    }
    public function setCh248($ch248)
    {
        if (is_string($ch248)) {
            $this->_ch248 = $ch248;
        }
    }
    public function setCh248details($ch248details)
    {
        if (is_string($ch248details)) {
            $this->_ch248details = $ch248details;
        }
    }
    public function setCh249($ch249)
    {
        if (is_string($ch249)) {
            $this->_ch249 = $ch249;
        }
    }
    public function setCh249details($ch249details)
    {
        if (is_string($ch249details)) {
            $this->_ch249details = $ch249details;
        }
    }
    public function setCh250($ch250)
    {
        if (is_string($ch250)) {
            $this->_ch250 = $ch250;
        }
    }
    public function setCh250details($ch250details)
    {
        if (is_string($ch250details)) {
            $this->_ch250details = $ch250details;
        }
    }
    public function setCh251($ch251)
    {
        if (is_string($ch251)) {
            $this->_ch251 = $ch251;
        }
    }
    public function setCh251details($ch251details)
    {
        if (is_string($ch251details)) {
            $this->_ch251details = $ch251details;
        }
    }
    public function setCh252($ch252)
    {
        if (is_string($ch252)) {
            $this->_ch252 = $ch252;
        }
    }
    public function setCh252details($ch252details)
    {
        if (is_string($ch252details)) {
            $this->_ch252details = $ch252details;
        }
    }
    public function setCh253($ch253)
    {
        if (is_string($ch253)) {
            $this->_ch253 = $ch253;
        }
    }
    public function setCh253details($ch253details)
    {
        if (is_string($ch253details)) {
            $this->_ch253details = $ch253details;
        }
    }
    public function setCh254($ch254)
    {
        if (is_string($ch254)) {
            $this->_ch254 = $ch254;
        }
    }
    public function setCh254details($ch254details)
    {
        if (is_string($ch254details)) {
            $this->_ch254details = $ch254details;
        }
    }
    public function setCh255($ch255)
    {
        if (is_string($ch255)) {
            $this->_ch255 = $ch255;
        }
    }
    public function setCh255details($ch255details)
    {
        if (is_string($ch255details)) {
            $this->_ch255details = $ch255details;
        }
    }
    public function setCh256($ch256)
    {
        if (is_string($ch256)) {
            $this->_ch256 = $ch256;
        }
    }
    public function setCh256details($ch256details)
    {
        if (is_string($ch256details)) {
            $this->_ch256details = $ch256details;
        }
    }
    public function setCh257($ch257)
    {
        if (is_string($ch257)) {
            $this->_ch257 = $ch257;
        }
    }
    public function setCh257details($ch257details)
    {
        if (is_string($ch257details)) {
            $this->_ch257details = $ch257details;
        }
    }
    public function setCh258($ch258)
    {
        if (is_string($ch258)) {
            $this->_ch258 = $ch258;
        }
    }
    public function setCh258details($ch258details)
    {
        if (is_string($ch258details)) {
            $this->_ch258details = $ch258details;
        }
    }
    public function setCh259($ch259)
    {
        if (is_string($ch259)) {
            $this->_ch259 = $ch259;
        }
    }
    public function setCh259details($ch259details)
    {
        if (is_string($ch259details)) {
            $this->_ch259details = $ch259details;
        }
    }
    public function setCh260($ch260)
    {
        if (is_string($ch260)) {
            $this->_ch260 = $ch260;
        }
    }
    public function setCh260details($ch260details)
    {
        if (is_string($ch260details)) {
            $this->_ch260details = $ch260details;
        }
    }
    public function setCh261($ch261)
    {
        if (is_string($ch261)) {
            $this->_ch261 = $ch261;
        }
    }
    public function setCh261details($ch261details)
    {
        if (is_string($ch261details)) {
            $this->_ch261details = $ch261details;
        }
    }
    public function setCh262($ch262)
    {
        if (is_string($ch262)) {
            $this->_ch262 = $ch262;
        }
    }
    public function setCh262details($ch262details)
    {
        if (is_string($ch262details)) {
            $this->_ch262details = $ch262details;
        }
    }
    public function setCh263($ch263)
    {
        if (is_string($ch263)) {
            $this->_ch263 = $ch263;
        }
    }
    public function setCh263details($ch263details)
    {
        if (is_string($ch263details)) {
            $this->_ch263details = $ch263details;
        }
    }
    public function setCh264($ch264)
    {
        if (is_string($ch264)) {
            $this->_ch264 = $ch264;
        }
    }
    public function setCh264details($ch264details)
    {
        if (is_string($ch264details)) {
            $this->_ch264details = $ch264details;
        }
    }
    public function setCh265($ch265)
    {
        if (is_string($ch265)) {
            $this->_ch265 = $ch265;
        }
    }
    public function setCh265details($ch265details)
    {
        if (is_string($ch265details)) {
            $this->_ch265details = $ch265details;
        }
    }
    public function setCh266($ch266)
    {
        if (is_string($ch266)) {
            $this->_ch266 = $ch266;
        }
    }
    public function setCh266details($ch266details)
    {
        if (is_string($ch266details)) {
            $this->_ch266details = $ch266details;
        }
    }
    public function setCh267($ch267)
    {
        if (is_string($ch267)) {
            $this->_ch267 = $ch267;
        }
    }
    public function setCh267details($ch267details)
    {
        if (is_string($ch267details)) {
            $this->_ch267details = $ch267details;
        }
    }
    public function setCh268($ch268)
    {
        if (is_string($ch268)) {
            $this->_ch268 = $ch268;
        }
    }
    public function setCh268details($ch268details)
    {
        if (is_string($ch268details)) {
            $this->_ch268details = $ch268details;
        }
    }
    public function setCh269($ch269)
    {
        if (is_string($ch269)) {
            $this->_ch269 = $ch269;
        }
    }
    public function setCh269details($ch269details)
    {
        if (is_string($ch269details)) {
            $this->_ch269details = $ch269details;
        }
    }
    public function setCh270($ch270)
    {
        if (is_string($ch270)) {
            $this->_ch270 = $ch270;
        }
    }
    public function setCh270details($ch270details)
    {
        if (is_string($ch270details)) {
            $this->_ch270details = $ch270details;
        }
    }
    public function setCh271($ch271)
    {
        if (is_string($ch271)) {
            $this->_ch271 = $ch271;
        }
    }
    public function setCh271details($ch271details)
    {
        if (is_string($ch271details)) {
            $this->_ch271details = $ch271details;
        }
    }
    public function setCh272($ch272)
    {
        if (is_string($ch272)) {
            $this->_ch272 = $ch272;
        }
    }
    public function setCh272details($ch272details)
    {
        if (is_string($ch272details)) {
            $this->_ch272details = $ch272details;
        }
    }
    public function setCh273($ch273)
    {
        if (is_string($ch273)) {
            $this->_ch273 = $ch273;
        }
    }
    public function setCh273details($ch273details)
    {
        if (is_string($ch273details)) {
            $this->_ch273details = $ch273details;
        }
    }
    public function setCh274($ch274)
    {
        if (is_string($ch274)) {
            $this->_ch274 = $ch274;
        }
    }
    public function setCh274details($ch274details)
    {
        if (is_string($ch274details)) {
            $this->_ch274details = $ch274details;
        }
    }
    public function setCh275($ch275)
    {
        if (is_string($ch275)) {
            $this->_ch275 = $ch275;
        }
    }
    public function setCh275details($ch275details)
    {
        if (is_string($ch275details)) {
            $this->_ch275details = $ch275details;
        }
    }
    public function setCh276($ch276)
    {
        if (is_string($ch276)) {
            $this->_ch276 = $ch276;
        }
    }
    public function setCh276details($ch276details)
    {
        if (is_string($ch276details)) {
            $this->_ch276details = $ch276details;
        }
    }
    public function setCh277($ch277)
    {
        if (is_string($ch277)) {
            $this->_ch277 = $ch277;
        }
    }
    public function setCh277details($ch277details)
    {
        if (is_string($ch277details)) {
            $this->_ch277details = $ch277details;
        }
    }
    public function setCh278($ch278)
    {
        if (is_string($ch278)) {
            $this->_ch278 = $ch278;
        }
    }
    public function setCh278details($ch278details)
    {
        if (is_string($ch278details)) {
            $this->_ch278details = $ch278details;
        }
    }
    public function setCh279($ch279)
    {
        if (is_string($ch279)) {
            $this->_ch279 = $ch279;
        }
    }
    public function setCh279details($ch279details)
    {
        if (is_string($ch279details)) {
            $this->_ch279details = $ch279details;
        }
    }
    public function setCh280($ch280)
    {
        if (is_string($ch280)) {
            $this->_ch280 = $ch280;
        }
    }
    public function setCh280details($ch280details)
    {
        if (is_string($ch280details)) {
            $this->_ch280details = $ch280details;
        }
    }
    public function setCh281($ch281)
    {
        if (is_string($ch281)) {
            $this->_ch281 = $ch281;
        }
    }
    public function setCh281details($ch281details)
    {
        if (is_string($ch281details)) {
            $this->_ch281details = $ch281details;
        }
    }
    public function setCh282($ch282)
    {
        if (is_string($ch282)) {
            $this->_ch282 = $ch282;
        }
    }
    public function setCh282details($ch282details)
    {
        if (is_string($ch282details)) {
            $this->_ch282details = $ch282details;
        }
    }
    public function setCh283($ch283)
    {
        if (is_string($ch283)) {
            $this->_ch283 = $ch283;
        }
    }
    public function setCh283details($ch283details)
    {
        if (is_string($ch283details)) {
            $this->_ch283details = $ch283details;
        }
    }
    public function setCh284($ch284)
    {
        if (is_string($ch284)) {
            $this->_ch284 = $ch284;
        }
    }
    public function setCh284details($ch284details)
    {
        if (is_string($ch284details)) {
            $this->_ch284details = $ch284details;
        }
    }
    public function setCh285($ch285)
    {
        if (is_string($ch285)) {
            $this->_ch285 = $ch285;
        }
    }
    public function setCh285details($ch285details)
    {
        if (is_string($ch285details)) {
            $this->_ch285details = $ch285details;
        }
    }
    public function setCh286($ch286)
    {
        if (is_string($ch286)) {
            $this->_ch286 = $ch286;
        }
    }
    public function setCh286details($ch286details)
    {
        if (is_string($ch286details)) {
            $this->_ch286details = $ch286details;
        }
    }
    public function setCh287($ch287)
    {
        if (is_string($ch287)) {
            $this->_ch287 = $ch287;
        }
    }
    public function setCh287details($ch287details)
    {
        if (is_string($ch287details)) {
            $this->_ch287details = $ch287details;
        }
    }
    public function setCh288($ch288)
    {
        if (is_string($ch288)) {
            $this->_ch288 = $ch288;
        }
    }
    public function setCh288details($ch288details)
    {
        if (is_string($ch288details)) {
            $this->_ch288details = $ch288details;
        }
    }
    public function setCh289($ch289)
    {
        if (is_string($ch289)) {
            $this->_ch289 = $ch289;
        }
    }
    public function setCh289details($ch289details)
    {
        if (is_string($ch289details)) {
            $this->_ch289details = $ch289details;
        }
    }
    public function setCh290($ch290)
    {
        if (is_string($ch290)) {
            $this->_ch290 = $ch290;
        }
    }
    public function setCh290details($ch290details)
    {
        if (is_string($ch290details)) {
            $this->_ch290details = $ch290details;
        }
    }
    public function setCh291($ch291)
    {
        if (is_string($ch291)) {
            $this->_ch291 = $ch291;
        }
    }
    public function setCh291details($ch291details)
    {
        if (is_string($ch291details)) {
            $this->_ch291details = $ch291details;
        }
    }
    public function setCh292($ch292)
    {
        if (is_string($ch292)) {
            $this->_ch292 = $ch292;
        }
    }
    public function setCh292details($ch292details)
    {
        if (is_string($ch292details)) {
            $this->_ch292details = $ch292details;
        }
    }
    public function setCh293($ch293)
    {
        if (is_string($ch293)) {
            $this->_ch293 = $ch293;
        }
    }
    public function setCh293details($ch293details)
    {
        if (is_string($ch293details)) {
            $this->_ch293details = $ch293details;
        }
    }
    public function setCh294($ch294)
    {
        if (is_string($ch294)) {
            $this->_ch294 = $ch294;
        }
    }
    public function setCh294details($ch294details)
    {
        if (is_string($ch294details)) {
            $this->_ch294details = $ch294details;
        }
    }
    public function setCh295($ch295)
    {
        if (is_string($ch295)) {
            $this->_ch295 = $ch295;
        }
    }
    public function setCh295details($ch295details)
    {
        if (is_string($ch295details)) {
            $this->_ch295details = $ch295details;
        }
    }
    public function setCh296($ch296)
    {
        if (is_string($ch296)) {
            $this->_ch296 = $ch296;
        }
    }
    public function setCh296details($ch296details)
    {
        if (is_string($ch296details)) {
            $this->_ch296details = $ch296details;
        }
    }
    public function setCh297($ch297)
    {
        if (is_string($ch297)) {
            $this->_ch297 = $ch297;
        }
    }
    public function setCh297details($ch297details)
    {
        if (is_string($ch297details)) {
            $this->_ch297details = $ch297details;
        }
    }
    public function setCh298($ch298)
    {
        if (is_string($ch298)) {
            $this->_ch298 = $ch298;
        }
    }
    public function setCh298details($ch298details)
    {
        if (is_string($ch298details)) {
            $this->_ch298details = $ch298details;
        }
    }
    public function setCh299($ch299)
    {
        if (is_string($ch299)) {
            $this->_ch299 = $ch299;
        }
    }
    public function setCh299details($ch299details)
    {
        if (is_string($ch299details)) {
            $this->_ch299details = $ch299details;
        }
    }
    public function setCh300($ch300)
    {
        if (is_string($ch300)) {
            $this->_ch300 = $ch300;
        }
    }
    public function setCh300details($ch300details)
    {
        if (is_string($ch300details)) {
            $this->_ch300details = $ch300details;
        }
    }
    public function setCh301($ch301)
    {
        if (is_string($ch301)) {
            $this->_ch301 = $ch301;
        }
    }
    public function setCh301details($ch301details)
    {
        if (is_string($ch301details)) {
            $this->_ch301details = $ch301details;
        }
    }
    public function setCh302($ch302)
    {
        if (is_string($ch302)) {
            $this->_ch302 = $ch302;
        }
    }
    public function setCh302details($ch302details)
    {
        if (is_string($ch302details)) {
            $this->_ch302details = $ch302details;
        }
    }
    public function setCh303($ch303)
    {
        if (is_string($ch303)) {
            $this->_ch303 = $ch303;
        }
    }
    public function setCh303details($ch303details)
    {
        if (is_string($ch303details)) {
            $this->_ch303details = $ch303details;
        }
    }
    public function setCh304($ch304)
    {
        if (is_string($ch304)) {
            $this->_ch304 = $ch304;
        }
    }
    public function setCh304details($ch304details)
    {
        if (is_string($ch304details)) {
            $this->_ch304details = $ch304details;
        }
    }
    public function setCh305($ch305)
    {
        if (is_string($ch305)) {
            $this->_ch305 = $ch305;
        }
    }
    public function setCh305details($ch305details)
    {
        if (is_string($ch305details)) {
            $this->_ch305details = $ch305details;
        }
    }
    public function setCh306($ch306)
    {
        if (is_string($ch306)) {
            $this->_ch306 = $ch306;
        }
    }
    public function setCh306details($ch306details)
    {
        if (is_string($ch306details)) {
            $this->_ch306details = $ch306details;
        }
    }
    public function setCh307($ch307)
    {
        if (is_string($ch307)) {
            $this->_ch307 = $ch307;
        }
    }
    public function setCh307details($ch307details)
    {
        if (is_string($ch307details)) {
            $this->_ch307details = $ch307details;
        }
    }
    public function setCh308($ch308)
    {
        if (is_string($ch308)) {
            $this->_ch308 = $ch308;
        }
    }
    public function setCh308details($ch308details)
    {
        if (is_string($ch308details)) {
            $this->_ch308details = $ch308details;
        }
    }
    public function setCh309($ch309)
    {
        if (is_string($ch309)) {
            $this->_ch309 = $ch309;
        }
    }
    public function setCh309details($ch309details)
    {
        if (is_string($ch309details)) {
            $this->_ch309details = $ch309details;
        }
    }
    public function setCh310($ch310)
    {
        if (is_string($ch310)) {
            $this->_ch310 = $ch310;
        }
    }
    public function setCh310details($ch310details)
    {
        if (is_string($ch310details)) {
            $this->_ch310details = $ch310details;
        }
    }
    public function setCh311($ch311)
    {
        if (is_string($ch311)) {
            $this->_ch311 = $ch311;
        }
    }
    public function setCh311details($ch311details)
    {
        if (is_string($ch311details)) {
            $this->_ch311details = $ch311details;
        }
    }
    public function setCh312($ch312)
    {
        if (is_string($ch312)) {
            $this->_ch312 = $ch312;
        }
    }
    public function setCh312details($ch312details)
    {
        if (is_string($ch312details)) {
            $this->_ch312details = $ch312details;
        }
    }
    public function setCh313($ch313)
    {
        if (is_string($ch313)) {
            $this->_ch313 = $ch313;
        }
    }
    public function setCh313details($ch313details)
    {
        if (is_string($ch313details)) {
            $this->_ch313details = $ch313details;
        }
    }
    public function setCh314($ch314)
    {
        if (is_string($ch314)) {
            $this->_ch314 = $ch314;
        }
    }
    public function setCh314details($ch314details)
    {
        if (is_string($ch314details)) {
            $this->_ch314details = $ch314details;
        }
    }
    public function setCh315($ch315)
    {
        if (is_string($ch315)) {
            $this->_ch315 = $ch315;
        }
    }
    public function setCh315details($ch315details)
    {
        if (is_string($ch315details)) {
            $this->_ch315details = $ch315details;
        }
    }
    public function setCh316($ch316)
    {
        if (is_string($ch316)) {
            $this->_ch316 = $ch316;
        }
    }
    public function setCh316details($ch316details)
    {
        if (is_string($ch316details)) {
            $this->_ch316details = $ch316details;
        }
    }
    public function setCh317($ch317)
    {
        if (is_string($ch317)) {
            $this->_ch317 = $ch317;
        }
    }
    public function setCh317details($ch317details)
    {
        if (is_string($ch317details)) {
            $this->_ch317details = $ch317details;
        }
    }
    public function setCh318($ch318)
    {
        if (is_string($ch318)) {
            $this->_ch318 = $ch318;
        }
    }
    public function setCh318details($ch318details)
    {
        if (is_string($ch318details)) {
            $this->_ch318details = $ch318details;
        }
    }
    public function setCh319($ch319)
    {
        if (is_string($ch319)) {
            $this->_ch319 = $ch319;
        }
    }
    public function setCh319details($ch319details)
    {
        if (is_string($ch319details)) {
            $this->_ch319details = $ch319details;
        }
    }
    public function setCh320($ch320)
    {
        if (is_string($ch320)) {
            $this->_ch320 = $ch320;
        }
    }
    public function setCh320details($ch320details)
    {
        if (is_string($ch320details)) {
            $this->_ch320details = $ch320details;
        }
    }
    public function setCh321($ch321)
    {
        if (is_string($ch321)) {
            $this->_ch321 = $ch321;
        }
    }
    public function setCh321details($ch321details)
    {
        if (is_string($ch321details)) {
            $this->_ch321details = $ch321details;
        }
    }
    public function setCh322($ch322)
    {
        if (is_string($ch322)) {
            $this->_ch322 = $ch322;
        }
    }
    public function setCh322details($ch322details)
    {
        if (is_string($ch322details)) {
            $this->_ch322details = $ch322details;
        }
    }
    public function setCh323($ch323)
    {
        if (is_string($ch323)) {
            $this->_ch323 = $ch323;
        }
    }
    public function setCh323details($ch323details)
    {
        if (is_string($ch323details)) {
            $this->_ch323details = $ch323details;
        }
    }
    public function setCh324($ch324)
    {
        if (is_string($ch324)) {
            $this->_ch324 = $ch324;
        }
    }
    public function setCh324details($ch324details)
    {
        if (is_string($ch324details)) {
            $this->_ch324details = $ch324details;
        }
    }
    public function setCh325($ch325)
    {
        if (is_string($ch325)) {
            $this->_ch325 = $ch325;
        }
    }
    public function setCh325details($ch325details)
    {
        if (is_string($ch325details)) {
            $this->_ch325details = $ch325details;
        }
    }
    public function setCh326($ch326)
    {
        if (is_string($ch326)) {
            $this->_ch326 = $ch326;
        }
    }
    public function setCh326details($ch326details)
    {
        if (is_string($ch326details)) {
            $this->_ch326details = $ch326details;
        }
    }
    public function setCh327($ch327)
    {
        if (is_string($ch327)) {
            $this->_ch327 = $ch327;
        }
    }
    public function setCh327details($ch327details)
    {
        if (is_string($ch327details)) {
            $this->_ch327details = $ch327details;
        }
    }
    public function setCh328($ch328)
    {
        if (is_string($ch328)) {
            $this->_ch328 = $ch328;
        }
    }
    public function setCh328details($ch328details)
    {
        if (is_string($ch328details)) {
            $this->_ch328details = $ch328details;
        }
    }
    public function setCh329($ch329)
    {
        if (is_string($ch329)) {
            $this->_ch329 = $ch329;
        }
    }
    public function setCh329details($ch329details)
    {
        if (is_string($ch329details)) {
            $this->_ch329details = $ch329details;
        }
    }
    public function setCh330($ch330)
    {
        if (is_string($ch330)) {
            $this->_ch330 = $ch330;
        }
    }
    public function setCh330details($ch330details)
    {
        if (is_string($ch330details)) {
            $this->_ch330details = $ch330details;
        }
    }
    public function setCh331($ch331)
    {
        if (is_string($ch331)) {
            $this->_ch331 = $ch331;
        }
    }
    public function setCh331details($ch331details)
    {
        if (is_string($ch331details)) {
            $this->_ch331details = $ch331details;
        }
    }
    public function setCh332($ch332)
    {
        if (is_string($ch332)) {
            $this->_ch332 = $ch332;
        }
    }
    public function setCh332details($ch332details)
    {
        if (is_string($ch332details)) {
            $this->_ch332details = $ch332details;
        }
    }
    public function setCh333($ch333)
    {
        if (is_string($ch333)) {
            $this->_ch333 = $ch333;
        }
    }
    public function setCh333details($ch333details)
    {
        if (is_string($ch333details)) {
            $this->_ch333details = $ch333details;
        }
    }
    public function setCh334($ch334)
    {
        if (is_string($ch334)) {
            $this->_ch334 = $ch334;
        }
    }
    public function setCh334details($ch334details)
    {
        if (is_string($ch334details)) {
            $this->_ch334details = $ch334details;
        }
    }
    public function setCh335($ch335)
    {
        if (is_string($ch335)) {
            $this->_ch335 = $ch335;
        }
    }
    public function setCh335details($ch335details)
    {
        if (is_string($ch335details)) {
            $this->_ch335details = $ch335details;
        }
    }
    public function setCh336($ch336)
    {
        if (is_string($ch336)) {
            $this->_ch336 = $ch336;
        }
    }
    public function setCh336details($ch336details)
    {
        if (is_string($ch336details)) {
            $this->_ch336details = $ch336details;
        }
    }
    public function setCh337($ch337)
    {
        if (is_string($ch337)) {
            $this->_ch337 = $ch337;
        }
    }
    public function setCh337details($ch337details)
    {
        if (is_string($ch337details)) {
            $this->_ch337details = $ch337details;
        }
    }
    public function setCh338($ch338)
    {
        if (is_string($ch338)) {
            $this->_ch338 = $ch338;
        }
    }
    public function setCh338details($ch338details)
    {
        if (is_string($ch338details)) {
            $this->_ch338details = $ch338details;
        }
    }
    public function setCh339($ch339)
    {
        if (is_string($ch339)) {
            $this->_ch339 = $ch339;
        }
    }
    public function setCh339details($ch339details)
    {
        if (is_string($ch339details)) {
            $this->_ch339details = $ch339details;
        }
    }
    public function setCh340($ch340)
    {
        if (is_string($ch340)) {
            $this->_ch340 = $ch340;
        }
    }
    public function setCh340details($ch340details)
    {
        if (is_string($ch340details)) {
            $this->_ch340details = $ch340details;
        }
    }
    public function setCh341($ch341)
    {
        if (is_string($ch341)) {
            $this->_ch341 = $ch341;
        }
    }
    public function setCh341details($ch341details)
    {
        if (is_string($ch341details)) {
            $this->_ch341details = $ch341details;
        }
    }
    public function setCh342($ch342)
    {
        if (is_string($ch342)) {
            $this->_ch342 = $ch342;
        }
    }
    public function setCh342details($ch342details)
    {
        if (is_string($ch342details)) {
            $this->_ch342details = $ch342details;
        }
    }
    public function setCh343($ch343)
    {
        if (is_string($ch343)) {
            $this->_ch343 = $ch343;
        }
    }
    public function setCh343details($ch343details)
    {
        if (is_string($ch343details)) {
            $this->_ch343details = $ch343details;
        }
    }
    public function setCh344($ch344)
    {
        if (is_string($ch344)) {
            $this->_ch344 = $ch344;
        }
    }
    public function setCh344details($ch344details)
    {
        if (is_string($ch344details)) {
            $this->_ch344details = $ch344details;
        }
    }
    public function setCh345($ch345)
    {
        if (is_string($ch345)) {
            $this->_ch345 = $ch345;
        }
    }
    public function setCh345details($ch345details)
    {
        if (is_string($ch345details)) {
            $this->_ch345details = $ch345details;
        }
    }
    public function setCh346($ch346)
    {
        if (is_string($ch346)) {
            $this->_ch346 = $ch346;
        }
    }
    public function setCh346details($ch346details)
    {
        if (is_string($ch346details)) {
            $this->_ch346details = $ch346details;
        }
    }
    public function setCh347($ch347)
    {
        if (is_string($ch347)) {
            $this->_ch347 = $ch347;
        }
    }
    public function setCh347details($ch347details)
    {
        if (is_string($ch347details)) {
            $this->_ch347details = $ch347details;
        }
    }
    public function setCh348($ch348)
    {
        if (is_string($ch348)) {
            $this->_ch348 = $ch348;
        }
    }
    public function setCh348details($ch348details)
    {
        if (is_string($ch348details)) {
            $this->_ch348details = $ch348details;
        }
    }
    public function setCh349($ch349)
    {
        if (is_string($ch349)) {
            $this->_ch349 = $ch349;
        }
    }
    public function setCh349details($ch349details)
    {
        if (is_string($ch349details)) {
            $this->_ch349details = $ch349details;
        }
    }
    public function setCh350($ch350)
    {
        if (is_string($ch350)) {
            $this->_ch350 = $ch350;
        }
    }
    public function setCh350details($ch350details)
    {
        if (is_string($ch350details)) {
            $this->_ch350details = $ch350details;
        }
    }
    public function setCh351($ch351)
    {
        if (is_string($ch351)) {
            $this->_ch351 = $ch351;
        }
    }
    public function setCh351details($ch351details)
    {
        if (is_string($ch351details)) {
            $this->_ch351details = $ch351details;
        }
    }
    public function setCh352($ch352)
    {
        if (is_string($ch352)) {
            $this->_ch352 = $ch352;
        }
    }
    public function setCh352details($ch352details)
    {
        if (is_string($ch352details)) {
            $this->_ch352details = $ch352details;
        }
    }
    public function setCh353($ch353)
    {
        if (is_string($ch353)) {
            $this->_ch353 = $ch353;
        }
    }
    public function setCh353details($ch353details)
    {
        if (is_string($ch353details)) {
            $this->_ch353details = $ch353details;
        }
    }
    public function setCh354($ch354)
    {
        if (is_string($ch354)) {
            $this->_ch354 = $ch354;
        }
    }
    public function setCh354details($ch354details)
    {
        if (is_string($ch354details)) {
            $this->_ch354details = $ch354details;
        }
    }
    public function setCh355($ch355)
    {
        if (is_string($ch355)) {
            $this->_ch355 = $ch355;
        }
    }
    public function setCh355details($ch355details)
    {
        if (is_string($ch355details)) {
            $this->_ch355details = $ch355details;
        }
    }
    public function setCh356($ch356)
    {
        if (is_string($ch356)) {
            $this->_ch356 = $ch356;
        }
    }
    public function setCh356details($ch356details)
    {
        if (is_string($ch356details)) {
            $this->_ch356details = $ch356details;
        }
    }
    public function setCh357($ch357)
    {
        if (is_string($ch357)) {
            $this->_ch357 = $ch357;
        }
    }
    public function setCh357details($ch357details)
    {
        if (is_string($ch357details)) {
            $this->_ch357details = $ch357details;
        }
    }
    public function setCh358($ch358)
    {
        if (is_string($ch358)) {
            $this->_ch358 = $ch358;
        }
    }
    public function setCh358details($ch358details)
    {
        if (is_string($ch358details)) {
            $this->_ch358details = $ch358details;
        }
    }
    public function setCh359($ch359)
    {
        if (is_string($ch359)) {
            $this->_ch359 = $ch359;
        }
    }
    public function setCh359details($ch359details)
    {
        if (is_string($ch359details)) {
            $this->_ch359details = $ch359details;
        }
    }
    public function setCh360($ch360)
    {
        if (is_string($ch360)) {
            $this->_ch360 = $ch360;
        }
    }
    public function setCh360details($ch360details)
    {
        if (is_string($ch360details)) {
            $this->_ch360details = $ch360details;
        }
    }
    public function setCh361($ch361)
    {
        if (is_string($ch361)) {
            $this->_ch361 = $ch361;
        }
    }
    public function setCh361details($ch361details)
    {
        if (is_string($ch361details)) {
            $this->_ch361details = $ch361details;
        }
    }
    public function setCh362($ch362)
    {
        if (is_string($ch362)) {
            $this->_ch362 = $ch362;
        }
    }
    public function setCh362details($ch362details)
    {
        if (is_string($ch362details)) {
            $this->_ch362details = $ch362details;
        }
    }
    public function setCh363($ch363)
    {
        if (is_string($ch363)) {
            $this->_ch363 = $ch363;
        }
    }
    public function setCh363details($ch363details)
    {
        if (is_string($ch363details)) {
            $this->_ch363details = $ch363details;
        }
    }
    public function setCh364($ch364)
    {
        if (is_string($ch364)) {
            $this->_ch364 = $ch364;
        }
    }
    public function setCh364details($ch364details)
    {
        if (is_string($ch364details)) {
            $this->_ch364details = $ch364details;
        }
    }
    public function setCh365($ch365)
    {
        if (is_string($ch365)) {
            $this->_ch365 = $ch365;
        }
    }
    public function setCh365details($ch365details)
    {
        if (is_string($ch365details)) {
            $this->_ch365details = $ch365details;
        }
    }
    public function setCh366($ch366)
    {
        if (is_string($ch366)) {
            $this->_ch366 = $ch366;
        }
    }
    public function setCh366details($ch366details)
    {
        if (is_string($ch366details)) {
            $this->_ch366details = $ch366details;
        }
    }
    public function setCh367($ch367)
    {
        if (is_string($ch367)) {
            $this->_ch367 = $ch367;
        }
    }
    public function setCh367details($ch367details)
    {
        if (is_string($ch367details)) {
            $this->_ch367details = $ch367details;
        }
    }
    public function setCh368($ch368)
    {
        if (is_string($ch368)) {
            $this->_ch368 = $ch368;
        }
    }
    public function setCh368details($ch368details)
    {
        if (is_string($ch368details)) {
            $this->_ch368details = $ch368details;
        }
    }
    public function setCh369($ch369)
    {
        if (is_string($ch369)) {
            $this->_ch369 = $ch369;
        }
    }
    public function setCh369details($ch369details)
    {
        if (is_string($ch369details)) {
            $this->_ch369details = $ch369details;
        }
    }
    public function setCh370($ch370)
    {
        if (is_string($ch370)) {
            $this->_ch370 = $ch370;
        }
    }
    public function setCh370details($ch370details)
    {
        if (is_string($ch370details)) {
            $this->_ch370details = $ch370details;
        }
    }
    public function setCh371($ch371)
    {
        if (is_string($ch371)) {
            $this->_ch371 = $ch371;
        }
    }
    public function setCh371details($ch371details)
    {
        if (is_string($ch371details)) {
            $this->_ch371details = $ch371details;
        }
    }
    public function setCh372($ch372)
    {
        if (is_string($ch372)) {
            $this->_ch372 = $ch372;
        }
    }
    public function setCh372details($ch372details)
    {
        if (is_string($ch372details)) {
            $this->_ch372details = $ch372details;
        }
    }
    public function setCh373($ch373)
    {
        if (is_string($ch373)) {
            $this->_ch373 = $ch373;
        }
    }
    public function setCh373details($ch373details)
    {
        if (is_string($ch373details)) {
            $this->_ch373details = $ch373details;
        }
    }
    public function setCh374($ch374)
    {
        if (is_string($ch374)) {
            $this->_ch374 = $ch374;
        }
    }
    public function setCh374details($ch374details)
    {
        if (is_string($ch374details)) {
            $this->_ch374details = $ch374details;
        }
    }
    public function setCh375($ch375)
    {
        if (is_string($ch375)) {
            $this->_ch375 = $ch375;
        }
    }
    public function setCh375details($ch375details)
    {
        if (is_string($ch375details)) {
            $this->_ch375details = $ch375details;
        }
    }
    public function setCh376($ch376)
    {
        if (is_string($ch376)) {
            $this->_ch376 = $ch376;
        }
    }
    public function setCh376details($ch376details)
    {
        if (is_string($ch376details)) {
            $this->_ch376details = $ch376details;
        }
    }
    public function setCh377($ch377)
    {
        if (is_string($ch377)) {
            $this->_ch377 = $ch377;
        }
    }
    public function setCh377details($ch377details)
    {
        if (is_string($ch377details)) {
            $this->_ch377details = $ch377details;
        }
    }
    public function setCh378($ch378)
    {
        if (is_string($ch378)) {
            $this->_ch378 = $ch378;
        }
    }
    public function setCh378details($ch378details)
    {
        if (is_string($ch378details)) {
            $this->_ch378details = $ch378details;
        }
    }
    public function setCh379($ch379)
    {
        if (is_string($ch379)) {
            $this->_ch379 = $ch379;
        }
    }
    public function setCh379details($ch379details)
    {
        if (is_string($ch379details)) {
            $this->_ch379details = $ch379details;
        }
    }
    public function setCh380($ch380)
    {
        if (is_string($ch380)) {
            $this->_ch380 = $ch380;
        }
    }
    public function setCh380details($ch380details)
    {
        if (is_string($ch380details)) {
            $this->_ch380details = $ch380details;
        }
    }
    public function setCh381($ch381)
    {
        if (is_string($ch381)) {
            $this->_ch381 = $ch381;
        }
    }
    public function setCh381details($ch381details)
    {
        if (is_string($ch381details)) {
            $this->_ch381details = $ch381details;
        }
    }
    public function setCh382($ch382)
    {
        if (is_string($ch382)) {
            $this->_ch382 = $ch382;
        }
    }
    public function setCh382details($ch382details)
    {
        if (is_string($ch382details)) {
            $this->_ch382details = $ch382details;
        }
    }
    public function setCh383($ch383)
    {
        if (is_string($ch383)) {
            $this->_ch383 = $ch383;
        }
    }
    public function setCh383details($ch383details)
    {
        if (is_string($ch383details)) {
            $this->_ch383details = $ch383details;
        }
    }
    public function setCh384($ch384)
    {
        if (is_string($ch384)) {
            $this->_ch384 = $ch384;
        }
    }
    public function setCh384details($ch384details)
    {
        if (is_string($ch384details)) {
            $this->_ch384details = $ch384details;
        }
    }
    public function setCh385($ch385)
    {
        if (is_string($ch385)) {
            $this->_ch385 = $ch385;
        }
    }
    public function setCh385details($ch385details)
    {
        if (is_string($ch385details)) {
            $this->_ch385details = $ch385details;
        }
    }
    public function setCh386($ch386)
    {
        if (is_string($ch386)) {
            $this->_ch386 = $ch386;
        }
    }
    public function setCh386details($ch386details)
    {
        if (is_string($ch386details)) {
            $this->_ch386details = $ch386details;
        }
    }
    public function setCh387($ch387)
    {
        if (is_string($ch387)) {
            $this->_ch387 = $ch387;
        }
    }
    public function setCh387details($ch387details)
    {
        if (is_string($ch387details)) {
            $this->_ch387details = $ch387details;
        }
    }
    public function setCh388($ch388)
    {
        if (is_string($ch388)) {
            $this->_ch388 = $ch388;
        }
    }
    public function setCh388details($ch388details)
    {
        if (is_string($ch388details)) {
            $this->_ch388details = $ch388details;
        }
    }
    public function setCh389($ch389)
    {
        if (is_string($ch389)) {
            $this->_ch389 = $ch389;
        }
    }
    public function setCh389details($ch389details)
    {
        if (is_string($ch389details)) {
            $this->_ch389details = $ch389details;
        }
    }
    public function setCh390($ch390)
    {
        if (is_string($ch390)) {
            $this->_ch390 = $ch390;
        }
    }
    public function setCh390details($ch390details)
    {
        if (is_string($ch390details)) {
            $this->_ch390details = $ch390details;
        }
    }
    public function setCh391($ch391)
    {
        if (is_string($ch391)) {
            $this->_ch391 = $ch391;
        }
    }
    public function setCh391details($ch391details)
    {
        if (is_string($ch391details)) {
            $this->_ch391details = $ch391details;
        }
    }
    public function setCh392($ch392)
    {
        if (is_string($ch392)) {
            $this->_ch392 = $ch392;
        }
    }
    public function setCh392details($ch392details)
    {
        if (is_string($ch392details)) {
            $this->_ch392details = $ch392details;
        }
    }
    public function setCh393($ch393)
    {
        if (is_string($ch393)) {
            $this->_ch393 = $ch393;
        }
    }
    public function setCh393details($ch393details)
    {
        if (is_string($ch393details)) {
            $this->_ch393details = $ch393details;
        }
    }
    public function setCh394($ch394)
    {
        if (is_string($ch394)) {
            $this->_ch394 = $ch394;
        }
    }
    public function setCh394details($ch394details)
    {
        if (is_string($ch394details)) {
            $this->_ch394details = $ch394details;
        }
    }
    public function setCh395($ch395)
    {
        if (is_string($ch395)) {
            $this->_ch395 = $ch395;
        }
    }
    public function setCh395details($ch395details)
    {
        if (is_string($ch395details)) {
            $this->_ch395details = $ch395details;
        }
    }
    public function setCh396($ch396)
    {
        if (is_string($ch396)) {
            $this->_ch396 = $ch396;
        }
    }
    public function setCh396details($ch396details)
    {
        if (is_string($ch396details)) {
            $this->_ch396details = $ch396details;
        }
    }
    public function setCh397($ch397)
    {
        if (is_string($ch397)) {
            $this->_ch397 = $ch397;
        }
    }
    public function setCh397details($ch397details)
    {
        if (is_string($ch397details)) {
            $this->_ch397details = $ch397details;
        }
    }
    public function setCh398($ch398)
    {
        if (is_string($ch398)) {
            $this->_ch398 = $ch398;
        }
    }
    public function setCh398details($ch398details)
    {
        if (is_string($ch398details)) {
            $this->_ch398details = $ch398details;
        }
    }
    public function setCh399($ch399)
    {
        if (is_string($ch399)) {
            $this->_ch399 = $ch399;
        }
    }
    public function setCh399details($ch399details)
    {
        if (is_string($ch399details)) {
            $this->_ch399details = $ch399details;
        }
    }
    public function setCh400($ch400)
    {
        if (is_string($ch400)) {
            $this->_ch400 = $ch400;
        }
    }
    public function setCh400details($ch400details)
    {
        if (is_string($ch400details)) {
            $this->_ch400details = $ch400details;
        }
    }
    public function setCh401($ch401)
    {
        if (is_string($ch401)) {
            $this->_ch401 = $ch401;
        }
    }
    public function setCh401details($ch401details)
    {
        if (is_string($ch401details)) {
            $this->_ch401details = $ch401details;
        }
    }
    public function setCh402($ch402)
    {
        if (is_string($ch402)) {
            $this->_ch402 = $ch402;
        }
    }
    public function setCh402details($ch402details)
    {
        if (is_string($ch402details)) {
            $this->_ch402details = $ch402details;
        }
    }
    public function setCh403($ch403)
    {
        if (is_string($ch403)) {
            $this->_ch403 = $ch403;
        }
    }
    public function setCh403details($ch403details)
    {
        if (is_string($ch403details)) {
            $this->_ch403details = $ch403details;
        }
    }
    public function setCh404($ch404)
    {
        if (is_string($ch404)) {
            $this->_ch404 = $ch404;
        }
    }
    public function setCh404details($ch404details)
    {
        if (is_string($ch404details)) {
            $this->_ch404details = $ch404details;
        }
    }
    public function setCh405($ch405)
    {
        if (is_string($ch405)) {
            $this->_ch405 = $ch405;
        }
    }
    public function setCh405details($ch405details)
    {
        if (is_string($ch405details)) {
            $this->_ch405details = $ch405details;
        }
    }
    public function setCh406($ch406)
    {
        if (is_string($ch406)) {
            $this->_ch406 = $ch406;
        }
    }
    public function setCh406details($ch406details)
    {
        if (is_string($ch406details)) {
            $this->_ch406details = $ch406details;
        }
    }
    public function setCh407($ch407)
    {
        if (is_string($ch407)) {
            $this->_ch407 = $ch407;
        }
    }
    public function setCh407details($ch407details)
    {
        if (is_string($ch407details)) {
            $this->_ch407details = $ch407details;
        }
    }
    public function setCh408($ch408)
    {
        if (is_string($ch408)) {
            $this->_ch408 = $ch408;
        }
    }
    public function setCh408details($ch408details)
    {
        if (is_string($ch408details)) {
            $this->_ch408details = $ch408details;
        }
    }
    public function setCh409($ch409)
    {
        if (is_string($ch409)) {
            $this->_ch409 = $ch409;
        }
    }
    public function setCh409details($ch409details)
    {
        if (is_string($ch409details)) {
            $this->_ch409details = $ch409details;
        }
    }
    public function setCh410($ch410)
    {
        if (is_string($ch410)) {
            $this->_ch410 = $ch410;
        }
    }
    public function setCh410details($ch410details)
    {
        if (is_string($ch410details)) {
            $this->_ch410details = $ch410details;
        }
    }
    public function setCh411($ch411)
    {
        if (is_string($ch411)) {
            $this->_ch411 = $ch411;
        }
    }
    public function setCh411details($ch411details)
    {
        if (is_string($ch411details)) {
            $this->_ch411details = $ch411details;
        }
    }
    public function setCh412($ch412)
    {
        if (is_string($ch412)) {
            $this->_ch412 = $ch412;
        }
    }
    public function setCh412details($ch412details)
    {
        if (is_string($ch412details)) {
            $this->_ch412details = $ch412details;
        }
    }
    public function setCh413($ch413)
    {
        if (is_string($ch413)) {
            $this->_ch413 = $ch413;
        }
    }
    public function setCh413details($ch413details)
    {
        if (is_string($ch413details)) {
            $this->_ch413details = $ch413details;
        }
    }
    public function setCh414($ch414)
    {
        if (is_string($ch414)) {
            $this->_ch414 = $ch414;
        }
    }
    public function setCh414details($ch414details)
    {
        if (is_string($ch414details)) {
            $this->_ch414details = $ch414details;
        }
    }
    public function setCh415($ch415)
    {
        if (is_string($ch415)) {
            $this->_ch415 = $ch415;
        }
    }
    public function setCh415details($ch415details)
    {
        if (is_string($ch415details)) {
            $this->_ch415details = $ch415details;
        }
    }
    public function setCh416($ch416)
    {
        if (is_string($ch416)) {
            $this->_ch416 = $ch416;
        }
    }
    public function setCh416details($ch416details)
    {
        if (is_string($ch416details)) {
            $this->_ch416details = $ch416details;
        }
    }
    public function setCh417($ch417)
    {
        if (is_string($ch417)) {
            $this->_ch417 = $ch417;
        }
    }
    public function setCh417details($ch417details)
    {
        if (is_string($ch417details)) {
            $this->_ch417details = $ch417details;
        }
    }
    public function setCh418($ch418)
    {
        if (is_string($ch418)) {
            $this->_ch418 = $ch418;
        }
    }
    public function setCh418details($ch418details)
    {
        if (is_string($ch418details)) {
            $this->_ch418details = $ch418details;
        }
    }
    public function setCh419($ch419)
    {
        if (is_string($ch419)) {
            $this->_ch419 = $ch419;
        }
    }
    public function setCh419details($ch419details)
    {
        if (is_string($ch419details)) {
            $this->_ch419details = $ch419details;
        }
    }
    public function setCh420($ch420)
    {
        if (is_string($ch420)) {
            $this->_ch420 = $ch420;
        }
    }
    public function setCh420details($ch420details)
    {
        if (is_string($ch420details)) {
            $this->_ch420details = $ch420details;
        }
    }
    public function setCh421($ch421)
    {
        if (is_string($ch421)) {
            $this->_ch421 = $ch421;
        }
    }
    public function setCh421details($ch421details)
    {
        if (is_string($ch421details)) {
            $this->_ch421details = $ch421details;
        }
    }
    public function setCh422($ch422)
    {
        if (is_string($ch422)) {
            $this->_ch422 = $ch422;
        }
    }
    public function setCh422details($ch422details)
    {
        if (is_string($ch422details)) {
            $this->_ch422details = $ch422details;
        }
    }
    public function setCh423($ch423)
    {
        if (is_string($ch423)) {
            $this->_ch423 = $ch423;
        }
    }
    public function setCh423details($ch423details)
    {
        if (is_string($ch423details)) {
            $this->_ch423details = $ch423details;
        }
    }
    public function setCh424($ch424)
    {
        if (is_string($ch424)) {
            $this->_ch424 = $ch424;
        }
    }
    public function setCh424details($ch424details)
    {
        if (is_string($ch424details)) {
            $this->_ch424details = $ch424details;
        }
    }
    public function setCh425($ch425)
    {
        if (is_string($ch425)) {
            $this->_ch425 = $ch425;
        }
    }
    public function setCh425details($ch425details)
    {
        if (is_string($ch425details)) {
            $this->_ch425details = $ch425details;
        }
    }
    public function setCh426($ch426)
    {
        if (is_string($ch426)) {
            $this->_ch426 = $ch426;
        }
    }
    public function setCh426details($ch426details)
    {
        if (is_string($ch426details)) {
            $this->_ch426details = $ch426details;
        }
    }
    public function setCh427($ch427)
    {
        if (is_string($ch427)) {
            $this->_ch427 = $ch427;
        }
    }
    public function setCh427details($ch427details)
    {
        if (is_string($ch427details)) {
            $this->_ch427details = $ch427details;
        }
    }
    public function setCh428($ch428)
    {
        if (is_string($ch428)) {
            $this->_ch428 = $ch428;
        }
    }
    public function setCh428details($ch428details)
    {
        if (is_string($ch428details)) {
            $this->_ch428details = $ch428details;
        }
    }
    public function setCh429($ch429)
    {
        if (is_string($ch429)) {
            $this->_ch429 = $ch429;
        }
    }
    public function setCh429details($ch429details)
    {
        if (is_string($ch429details)) {
            $this->_ch429details = $ch429details;
        }
    }
    public function setCh430($ch430)
    {
        if (is_string($ch430)) {
            $this->_ch430 = $ch430;
        }
    }
    public function setCh430details($ch430details)
    {
        if (is_string($ch430details)) {
            $this->_ch430details = $ch430details;
        }
    }
    public function setCh431($ch431)
    {
        if (is_string($ch431)) {
            $this->_ch431 = $ch431;
        }
    }
    public function setCh431details($ch431details)
    {
        if (is_string($ch431details)) {
            $this->_ch431details = $ch431details;
        }
    }
    public function setCh432($ch432)
    {
        if (is_string($ch432)) {
            $this->_ch432 = $ch432;
        }
    }
    public function setCh432details($ch432details)
    {
        if (is_string($ch432details)) {
            $this->_ch432details = $ch432details;
        }
    }
    public function setCh433($ch433)
    {
        if (is_string($ch433)) {
            $this->_ch433 = $ch433;
        }
    }
    public function setCh433details($ch433details)
    {
        if (is_string($ch433details)) {
            $this->_ch433details = $ch433details;
        }
    }
    public function setCh434($ch434)
    {
        if (is_string($ch434)) {
            $this->_ch434 = $ch434;
        }
    }
    public function setCh434details($ch434details)
    {
        if (is_string($ch434details)) {
            $this->_ch434details = $ch434details;
        }
    }
    public function setCh435($ch435)
    {
        if (is_string($ch435)) {
            $this->_ch435 = $ch435;
        }
    }
    public function setCh435details($ch435details)
    {
        if (is_string($ch435details)) {
            $this->_ch435details = $ch435details;
        }
    }
    public function setCh436($ch436)
    {
        if (is_string($ch436)) {
            $this->_ch436 = $ch436;
        }
    }
    public function setCh436details($ch436details)
    {
        if (is_string($ch436details)) {
            $this->_ch436details = $ch436details;
        }
    }
    public function setCh437($ch437)
    {
        if (is_string($ch437)) {
            $this->_ch437 = $ch437;
        }
    }
    public function setCh437details($ch437details)
    {
        if (is_string($ch437details)) {
            $this->_ch437details = $ch437details;
        }
    }
    public function setCh438($ch438)
    {
        if (is_string($ch438)) {
            $this->_ch438 = $ch438;
        }
    }
    public function setCh438details($ch438details)
    {
        if (is_string($ch438details)) {
            $this->_ch438details = $ch438details;
        }
    }
    public function setCh439($ch439)
    {
        if (is_string($ch439)) {
            $this->_ch439 = $ch439;
        }
    }
    public function setCh439details($ch439details)
    {
        if (is_string($ch439details)) {
            $this->_ch439details = $ch439details;
        }
    }
    public function setCh440($ch440)
    {
        if (is_string($ch440)) {
            $this->_ch440 = $ch440;
        }
    }
    public function setCh440details($ch440details)
    {
        if (is_string($ch440details)) {
            $this->_ch440details = $ch440details;
        }
    }
    public function setCh441($ch441)
    {
        if (is_string($ch441)) {
            $this->_ch441 = $ch441;
        }
    }
    public function setCh441details($ch441details)
    {
        if (is_string($ch441details)) {
            $this->_ch441details = $ch441details;
        }
    }
    public function setCh442($ch442)
    {
        if (is_string($ch442)) {
            $this->_ch442 = $ch442;
        }
    }
    public function setCh442details($ch442details)
    {
        if (is_string($ch442details)) {
            $this->_ch442details = $ch442details;
        }
    }
    public function setCh443($ch443)
    {
        if (is_string($ch443)) {
            $this->_ch443 = $ch443;
        }
    }
    public function setCh443details($ch443details)
    {
        if (is_string($ch443details)) {
            $this->_ch443details = $ch443details;
        }
    }
    public function setCh444($ch444)
    {
        if (is_string($ch444)) {
            $this->_ch444 = $ch444;
        }
    }
    public function setCh444details($ch444details)
    {
        if (is_string($ch444details)) {
            $this->_ch444details = $ch444details;
        }
    }
    public function setCh445($ch445)
    {
        if (is_string($ch445)) {
            $this->_ch445 = $ch445;
        }
    }
    public function setCh445details($ch445details)
    {
        if (is_string($ch445details)) {
            $this->_ch445details = $ch445details;
        }
    }
    public function setCh446($ch446)
    {
        if (is_string($ch446)) {
            $this->_ch446 = $ch446;
        }
    }
    public function setCh446details($ch446details)
    {
        if (is_string($ch446details)) {
            $this->_ch446details = $ch446details;
        }
    }
    public function setCh447($ch447)
    {
        if (is_string($ch447)) {
            $this->_ch447 = $ch447;
        }
    }
    public function setCh447details($ch447details)
    {
        if (is_string($ch447details)) {
            $this->_ch447details = $ch447details;
        }
    }
    public function setCh448($ch448)
    {
        if (is_string($ch448)) {
            $this->_ch448 = $ch448;
        }
    }
    public function setCh448details($ch448details)
    {
        if (is_string($ch448details)) {
            $this->_ch448details = $ch448details;
        }
    }
    public function setCh449($ch449)
    {
        if (is_string($ch449)) {
            $this->_ch449 = $ch449;
        }
    }
    public function setCh449details($ch449details)
    {
        if (is_string($ch449details)) {
            $this->_ch449details = $ch449details;
        }
    }
    public function setCh450($ch450)
    {
        if (is_string($ch450)) {
            $this->_ch450 = $ch450;
        }
    }
    public function setCh450details($ch450details)
    {
        if (is_string($ch450details)) {
            $this->_ch450details = $ch450details;
        }
    }
    public function setCh451($ch451)
    {
        if (is_string($ch451)) {
            $this->_ch451 = $ch451;
        }
    }
    public function setCh451details($ch451details)
    {
        if (is_string($ch451details)) {
            $this->_ch451details = $ch451details;
        }
    }
    public function setCh452($ch452)
    {
        if (is_string($ch452)) {
            $this->_ch452 = $ch452;
        }
    }
    public function setCh452details($ch452details)
    {
        if (is_string($ch452details)) {
            $this->_ch452details = $ch452details;
        }
    }
    public function setCh453($ch453)
    {
        if (is_string($ch453)) {
            $this->_ch453 = $ch453;
        }
    }
    public function setCh453details($ch453details)
    {
        if (is_string($ch453details)) {
            $this->_ch453details = $ch453details;
        }
    }
    public function setCh454($ch454)
    {
        if (is_string($ch454)) {
            $this->_ch454 = $ch454;
        }
    }
    public function setCh454details($ch454details)
    {
        if (is_string($ch454details)) {
            $this->_ch454details = $ch454details;
        }
    }
    public function setCh455($ch455)
    {
        if (is_string($ch455)) {
            $this->_ch455 = $ch455;
        }
    }
    public function setCh455details($ch455details)
    {
        if (is_string($ch455details)) {
            $this->_ch455details = $ch455details;
        }
    }
    public function setCh456($ch456)
    {
        if (is_string($ch456)) {
            $this->_ch456 = $ch456;
        }
    }
    public function setCh456details($ch456details)
    {
        if (is_string($ch456details)) {
            $this->_ch456details = $ch456details;
        }
    }
    public function setCh457($ch457)
    {
        if (is_string($ch457)) {
            $this->_ch457 = $ch457;
        }
    }
    public function setCh457details($ch457details)
    {
        if (is_string($ch457details)) {
            $this->_ch457details = $ch457details;
        }
    }
    public function setCh458($ch458)
    {
        if (is_string($ch458)) {
            $this->_ch458 = $ch458;
        }
    }
    public function setCh458details($ch458details)
    {
        if (is_string($ch458details)) {
            $this->_ch458details = $ch458details;
        }
    }
    public function setCh459($ch459)
    {
        if (is_string($ch459)) {
            $this->_ch459 = $ch459;
        }
    }
    public function setCh459details($ch459details)
    {
        if (is_string($ch459details)) {
            $this->_ch459details = $ch459details;
        }
    }
    public function setCh460($ch460)
    {
        if (is_string($ch460)) {
            $this->_ch460 = $ch460;
        }
    }
    public function setCh460details($ch460details)
    {
        if (is_string($ch460details)) {
            $this->_ch460details = $ch460details;
        }
    }
    public function setCh461($ch461)
    {
        if (is_string($ch461)) {
            $this->_ch461 = $ch461;
        }
    }
    public function setCh461details($ch461details)
    {
        if (is_string($ch461details)) {
            $this->_ch461details = $ch461details;
        }
    }
    public function setCh462($ch462)
    {
        if (is_string($ch462)) {
            $this->_ch462 = $ch462;
        }
    }
    public function setCh462details($ch462details)
    {
        if (is_string($ch462details)) {
            $this->_ch462details = $ch462details;
        }
    }
    public function setCh463($ch463)
    {
        if (is_string($ch463)) {
            $this->_ch463 = $ch463;
        }
    }
    public function setCh463details($ch463details)
    {
        if (is_string($ch463details)) {
            $this->_ch463details = $ch463details;
        }
    }
    public function setCh464($ch464)
    {
        if (is_string($ch464)) {
            $this->_ch464 = $ch464;
        }
    }
    public function setCh464details($ch464details)
    {
        if (is_string($ch464details)) {
            $this->_ch464details = $ch464details;
        }
    }
    public function setCh465($ch465)
    {
        if (is_string($ch465)) {
            $this->_ch465 = $ch465;
        }
    }
    public function setCh465details($ch465details)
    {
        if (is_string($ch465details)) {
            $this->_ch465details = $ch465details;
        }
    }
    public function setCh466($ch466)
    {
        if (is_string($ch466)) {
            $this->_ch466 = $ch466;
        }
    }
    public function setCh466details($ch466details)
    {
        if (is_string($ch466details)) {
            $this->_ch466details = $ch466details;
        }
    }
    public function setCh467($ch467)
    {
        if (is_string($ch467)) {
            $this->_ch467 = $ch467;
        }
    }
    public function setCh467details($ch467details)
    {
        if (is_string($ch467details)) {
            $this->_ch467details = $ch467details;
        }
    }
    public function setCh468($ch468)
    {
        if (is_string($ch468)) {
            $this->_ch468 = $ch468;
        }
    }
    public function setCh468details($ch468details)
    {
        if (is_string($ch468details)) {
            $this->_ch468details = $ch468details;
        }
    }
    public function setCh469($ch469)
    {
        if (is_string($ch469)) {
            $this->_ch469 = $ch469;
        }
    }
    public function setCh469details($ch469details)
    {
        if (is_string($ch469details)) {
            $this->_ch469details = $ch469details;
        }
    }
    public function setCh470($ch470)
    {
        if (is_string($ch470)) {
            $this->_ch470 = $ch470;
        }
    }
    public function setCh470details($ch470details)
    {
        if (is_string($ch470details)) {
            $this->_ch470details = $ch470details;
        }
    }
    public function setCh471($ch471)
    {
        if (is_string($ch471)) {
            $this->_ch471 = $ch471;
        }
    }
    public function setCh471details($ch471details)
    {
        if (is_string($ch471details)) {
            $this->_ch471details = $ch471details;
        }
    }
    public function setCh472($ch472)
    {
        if (is_string($ch472)) {
            $this->_ch472 = $ch472;
        }
    }
    public function setCh472details($ch472details)
    {
        if (is_string($ch472details)) {
            $this->_ch472details = $ch472details;
        }
    }
    public function setCh473($ch473)
    {
        if (is_string($ch473)) {
            $this->_ch473 = $ch473;
        }
    }
    public function setCh473details($ch473details)
    {
        if (is_string($ch473details)) {
            $this->_ch473details = $ch473details;
        }
    }
    public function setCh474($ch474)
    {
        if (is_string($ch474)) {
            $this->_ch474 = $ch474;
        }
    }
    public function setCh474details($ch474details)
    {
        if (is_string($ch474details)) {
            $this->_ch474details = $ch474details;
        }
    }
    public function setCh475($ch475)
    {
        if (is_string($ch475)) {
            $this->_ch475 = $ch475;
        }
    }
    public function setCh475details($ch475details)
    {
        if (is_string($ch475details)) {
            $this->_ch475details = $ch475details;
        }
    }
    public function setCh476($ch476)
    {
        if (is_string($ch476)) {
            $this->_ch476 = $ch476;
        }
    }
    public function setCh476details($ch476details)
    {
        if (is_string($ch476details)) {
            $this->_ch476details = $ch476details;
        }
    }
    public function setCh477($ch477)
    {
        if (is_string($ch477)) {
            $this->_ch477 = $ch477;
        }
    }
    public function setCh477details($ch477details)
    {
        if (is_string($ch477details)) {
            $this->_ch477details = $ch477details;
        }
    }
    public function setCh478($ch478)
    {
        if (is_string($ch478)) {
            $this->_ch478 = $ch478;
        }
    }
    public function setCh478details($ch478details)
    {
        if (is_string($ch478details)) {
            $this->_ch478details = $ch478details;
        }
    }
    public function setCh479($ch479)
    {
        if (is_string($ch479)) {
            $this->_ch479 = $ch479;
        }
    }
    public function setCh479details($ch479details)
    {
        if (is_string($ch479details)) {
            $this->_ch479details = $ch479details;
        }
    }
    public function setCh480($ch480)
    {
        if (is_string($ch480)) {
            $this->_ch480 = $ch480;
        }
    }
    public function setCh480details($ch480details)
    {
        if (is_string($ch480details)) {
            $this->_ch480details = $ch480details;
        }
    }
    public function setCh481($ch481)
    {
        if (is_string($ch481)) {
            $this->_ch481 = $ch481;
        }
    }
    public function setCh481details($ch481details)
    {
        if (is_string($ch481details)) {
            $this->_ch481details = $ch481details;
        }
    }
    public function setCh482($ch482)
    {
        if (is_string($ch482)) {
            $this->_ch482 = $ch482;
        }
    }
    public function setCh482details($ch482details)
    {
        if (is_string($ch482details)) {
            $this->_ch482details = $ch482details;
        }
    }
    public function setCh483($ch483)
    {
        if (is_string($ch483)) {
            $this->_ch483 = $ch483;
        }
    }
    public function setCh483details($ch483details)
    {
        if (is_string($ch483details)) {
            $this->_ch483details = $ch483details;
        }
    }
    public function setCh484($ch484)
    {
        if (is_string($ch484)) {
            $this->_ch484 = $ch484;
        }
    }
    public function setCh484details($ch484details)
    {
        if (is_string($ch484details)) {
            $this->_ch484details = $ch484details;
        }
    }
    public function setCh485($ch485)
    {
        if (is_string($ch485)) {
            $this->_ch485 = $ch485;
        }
    }
    public function setCh485details($ch485details)
    {
        if (is_string($ch485details)) {
            $this->_ch485details = $ch485details;
        }
    }
    public function setCh486($ch486)
    {
        if (is_string($ch486)) {
            $this->_ch486 = $ch486;
        }
    }
    public function setCh486details($ch486details)
    {
        if (is_string($ch486details)) {
            $this->_ch486details = $ch486details;
        }
    }
    public function setCh487($ch487)
    {
        if (is_string($ch487)) {
            $this->_ch487 = $ch487;
        }
    }
    public function setCh487details($ch487details)
    {
        if (is_string($ch487details)) {
            $this->_ch487details = $ch487details;
        }
    }
    public function setCh488($ch488)
    {
        if (is_string($ch488)) {
            $this->_ch488 = $ch488;
        }
    }
    public function setCh488details($ch488details)
    {
        if (is_string($ch488details)) {
            $this->_ch488details = $ch488details;
        }
    }
    public function setCh489($ch489)
    {
        if (is_string($ch489)) {
            $this->_ch489 = $ch489;
        }
    }
    public function setCh489details($ch489details)
    {
        if (is_string($ch489details)) {
            $this->_ch489details = $ch489details;
        }
    }
    public function setCh490($ch490)
    {
        if (is_string($ch490)) {
            $this->_ch490 = $ch490;
        }
    }
    public function setCh490details($ch490details)
    {
        if (is_string($ch490details)) {
            $this->_ch490details = $ch490details;
        }
    }
    public function setCh491($ch491)
    {
        if (is_string($ch491)) {
            $this->_ch491 = $ch491;
        }
    }
    public function setCh491details($ch491details)
    {
        if (is_string($ch491details)) {
            $this->_ch491details = $ch491details;
        }
    }
    public function setCh492($ch492)
    {
        if (is_string($ch492)) {
            $this->_ch492 = $ch492;
        }
    }
    public function setCh492details($ch492details)
    {
        if (is_string($ch492details)) {
            $this->_ch492details = $ch492details;
        }
    }
    public function setCh493($ch493)
    {
        if (is_string($ch493)) {
            $this->_ch493 = $ch493;
        }
    }
    public function setCh493details($ch493details)
    {
        if (is_string($ch493details)) {
            $this->_ch493details = $ch493details;
        }
    }
    public function setCh494($ch494)
    {
        if (is_string($ch494)) {
            $this->_ch494 = $ch494;
        }
    }
    public function setCh494details($ch494details)
    {
        if (is_string($ch494details)) {
            $this->_ch494details = $ch494details;
        }
    }
    public function setCh495($ch495)
    {
        if (is_string($ch495)) {
            $this->_ch495 = $ch495;
        }
    }
    public function setCh495details($ch495details)
    {
        if (is_string($ch495details)) {
            $this->_ch495details = $ch495details;
        }
    }
    public function setCh496($ch496)
    {
        if (is_string($ch496)) {
            $this->_ch496 = $ch496;
        }
    }
    public function setCh496details($ch496details)
    {
        if (is_string($ch496details)) {
            $this->_ch496details = $ch496details;
        }
    }
    public function setCh497($ch497)
    {
        if (is_string($ch497)) {
            $this->_ch497 = $ch497;
        }
    }
    public function setCh497details($ch497details)
    {
        if (is_string($ch497details)) {
            $this->_ch497details = $ch497details;
        }
    }
    public function setCh498($ch498)
    {
        if (is_string($ch498)) {
            $this->_ch498 = $ch498;
        }
    }
    public function setCh498details($ch498details)
    {
        if (is_string($ch498details)) {
            $this->_ch498details = $ch498details;
        }
    }
    public function setCh499($ch499)
    {
        if (is_string($ch499)) {
            $this->_ch499 = $ch499;
        }
    }
    public function setCh499details($ch499details)
    {
        if (is_string($ch499details)) {
            $this->_ch499details = $ch499details;
        }
    }
    public function setCh500($ch500)
    {
        if (is_string($ch500)) {
            $this->_ch500 = $ch500;
        }
    }
    public function setCh500details($ch500details)
    {
        if (is_string($ch500details)) {
            $this->_ch500details = $ch500details;
        }
    }
    public function setCh501($ch501)
    {
        if (is_string($ch501)) {
            $this->_ch501 = $ch501;
        }
    }
    public function setCh501details($ch501details)
    {
        if (is_string($ch501details)) {
            $this->_ch501details = $ch501details;
        }
    }
    public function setCh502($ch502)
    {
        if (is_string($ch502)) {
            $this->_ch502 = $ch502;
        }
    }
    public function setCh502details($ch502details)
    {
        if (is_string($ch502details)) {
            $this->_ch502details = $ch502details;
        }
    }
    public function setCh503($ch503)
    {
        if (is_string($ch503)) {
            $this->_ch503 = $ch503;
        }
    }
    public function setCh503details($ch503details)
    {
        if (is_string($ch503details)) {
            $this->_ch503details = $ch503details;
        }
    }
    public function setCh504($ch504)
    {
        if (is_string($ch504)) {
            $this->_ch504 = $ch504;
        }
    }
    public function setCh504details($ch504details)
    {
        if (is_string($ch504details)) {
            $this->_ch504details = $ch504details;
        }
    }
    public function setCh505($ch505)
    {
        if (is_string($ch505)) {
            $this->_ch505 = $ch505;
        }
    }
    public function setCh505details($ch505details)
    {
        if (is_string($ch505details)) {
            $this->_ch505details = $ch505details;
        }
    }
    public function setCh506($ch506)
    {
        if (is_string($ch506)) {
            $this->_ch506 = $ch506;
        }
    }
    public function setCh506details($ch506details)
    {
        if (is_string($ch506details)) {
            $this->_ch506details = $ch506details;
        }
    }
    public function setCh507($ch507)
    {
        if (is_string($ch507)) {
            $this->_ch507 = $ch507;
        }
    }
    public function setCh507details($ch507details)
    {
        if (is_string($ch507details)) {
            $this->_ch507details = $ch507details;
        }
    }
    public function setCh508($ch508)
    {
        if (is_string($ch508)) {
            $this->_ch508 = $ch508;
        }
    }
    public function setCh508details($ch508details)
    {
        if (is_string($ch508details)) {
            $this->_ch508details = $ch508details;
        }
    }
    public function setCh509($ch509)
    {
        if (is_string($ch509)) {
            $this->_ch509 = $ch509;
        }
    }
    public function setCh509details($ch509details)
    {
        if (is_string($ch509details)) {
            $this->_ch509details = $ch509details;
        }
    }
    public function setCh510($ch510)
    {
        if (is_string($ch510)) {
            $this->_ch510 = $ch510;
        }
    }
    public function setCh510details($ch510details)
    {
        if (is_string($ch510details)) {
            $this->_ch510details = $ch510details;
        }
    }
    public function setCh511($ch511)
    {
        if (is_string($ch511)) {
            $this->_ch511 = $ch511;
        }
    }
    public function setCh511details($ch511details)
    {
        if (is_string($ch511details)) {
            $this->_ch511details = $ch511details;
        }
    }
    public function setCh512($ch512)
    {
        if (is_string($ch512)) {
            $this->_ch512 = $ch512;
        }
    }
    public function setCh512details($ch512details)
    {
        if (is_string($ch512details)) {
            $this->_ch512details = $ch512details;
        }
    }
    # /Setters
}
