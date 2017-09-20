var map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 13,
      center: new google.maps.LatLng(-8.676375,115.211922),
      mapTypeId: 'roadmap'
    });
}

//================================= Inisiasi Array ODP ====================================//

var markers = [];
var markersALPRO = [];
var markersKoordinat = [];
var markersCluster = [];
var markersND = [];
// SMY
var markers_SMY_0 = [];
var markers_SMY_1 = [];
var markers_SMY_2 = [];
var markers_SMY_3 = [];
var markers_SMY_4 = [];
var markers_SMY_5 = [];
var markers_SMY_6 = [];
var markers_SMY_7 = [];
var markers_SMY_8 = [];
var markers_SMY_9 = [];
//SAU
var markers_SAU_0 = [];
var markers_SAU_1 = [];
var markers_SAU_2 = [];
var markers_SAU_3 = [];
var markers_SAU_4 = [];
var markers_SAU_5 = [];
var markers_SAU_6 = [];
var markers_SAU_7 = [];
var markers_SAU_8 = [];
var markers_SAU_9 = [];
//BNO
var markers_BNO_0 = [];
var markers_BNO_1 = [];
var markers_BNO_2 = [];
var markers_BNO_3 = [];
var markers_BNO_4 = [];
var markers_BNO_5 = [];
var markers_BNO_6 = [];
var markers_BNO_7 = [];
var markers_BNO_8 = [];
var markers_BNO_9 = [];
//JBR
var markers_JBR_0 = [];
var markers_JBR_1 = [];
var markers_JBR_2 = [];
var markers_JBR_3 = [];
var markers_JBR_4 = [];
var markers_JBR_5 = [];
var markers_JBR_6 = [];
var markers_JBR_7 = [];
var markers_JBR_8 = [];
var markers_JBR_9 = [];
//KLM
var markers_KLM_0 = [];
var markers_KLM_1 = [];
var markers_KLM_2 = [];
var markers_KLM_3 = [];
var markers_KLM_4 = [];
var markers_KLM_5 = [];
var markers_KLM_6 = [];
var markers_KLM_7 = [];
var markers_KLM_8 = [];
var markers_KLM_9 = [];
//KUT
var markers_KUT_0 = [];
var markers_KUT_1 = [];
var markers_KUT_2 = [];
var markers_KUT_3 = [];
var markers_KUT_4 = [];
var markers_KUT_5 = [];
var markers_KUT_6 = [];
var markers_KUT_7 = [];
var markers_KUT_8 = [];
var markers_KUT_9 = [];
//MMN
var markers_MMN_0 = [];
var markers_MMN_1 = [];
var markers_MMN_2 = [];
var markers_MMN_3 = [];
var markers_MMN_4 = [];
var markers_MMN_5 = [];
var markers_MMN_6 = [];
var markers_MMN_7 = [];
var markers_MMN_8 = [];
var markers_MMN_9 = [];
//NSD
var markers_NSD_0 = [];
var markers_NSD_1 = [];
var markers_NSD_2 = [];
var markers_NSD_3 = [];
var markers_NSD_4 = [];
var markers_NSD_5 = [];
var markers_NSD_6 = [];
var markers_NSD_7 = [];
var markers_NSD_8 = [];
var markers_NSD_9 = [];
//SWI
var markers_SWI_0 = [];
var markers_SWI_1 = [];
var markers_SWI_2 = [];
var markers_SWI_3 = [];
var markers_SWI_4 = [];
var markers_SWI_5 = [];
var markers_SWI_6 = [];
var markers_SWI_7 = [];
var markers_SWI_8 = [];
var markers_SWI_9 = [];
//TOP
var markers_TOP_0 = [];
var markers_TOP_1 = [];
var markers_TOP_2 = [];
var markers_TOP_3 = [];
var markers_TOP_4 = [];
var markers_TOP_5 = [];
var markers_TOP_6 = [];
var markers_TOP_7 = [];
var markers_TOP_8 = [];
var markers_TOP_9 = [];
//UBN
var markers_UBN_0 = [];
var markers_UBN_1 = [];
var markers_UBN_2 = [];
var markers_UBN_3 = [];
var markers_UBN_4 = [];
var markers_UBN_5 = [];
var markers_UBN_6 = [];
var markers_UBN_7 = [];
var markers_UBN_8 = [];
var markers_UBN_9 = [];

//================== JavaScript untuk Maps di Cari Koordinat =======================//

function pushMarkerKoordinat(marker){
  markersKoordinat.push(marker);
}

function setMarkerKoordinat(){
  markersKoordinat = [];
}

function setMapOnAllKoordinat(map){
  for(var i = 0; i < markersKoordinat.length; i++){
    markersKoordinat[i].setMap(map);
  }
}

//================== JavaScript untuk Maps di Cari ND =======================//

function pushMarkerND(marker){
  markersND.push(marker);
}

function setMarkerND(){
  markersND = [];
}

function setMapOnAllND(map){
  for(var i = 0; i < markersND.length; i++){
    markersND[i].setMap(map);
  }
}

//================== JavaScript untuk Maps di Cari Cluster =======================//

function pushMarkerCluster(marker){
  markersCluster.push(marker);
}

function setMarkerCluster(){
  markersCluster = [];
}

function setMapOnAllCluster(map){
  for(var i = 0; i < markersCluster.length; i++){
    markersCluster[i].setMap(map);
  }
}

//================== JavaScript untuk Maps di Cari ODP =======================//

function pushMarker(marker){
  markers.push(marker);
}

function setMarker(){
  markers = [];
}

function setMapOnAll(map){
  for(var i = 0; i < markers.length; i++){
    markers[i].setMap(map);
  }
}

//================== JavaScript untuk Maps di ODP SMY =======================//

function parseCreateMarker_SMY(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_SMY_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_SMY_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_SMY_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_SMY_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_SMY_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_SMY_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_SMY_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_SMY_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_SMY_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_SMY_6");
  }
  createMarker_SMY(nama_kelas,nilai);
}

function pushMarker_SMY(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_SMY_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SMY_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SMY_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_SMY_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_SMY_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_SMY_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SMY_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_SMY_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_SMY_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_SMY_9.push(marker);
  }
}

function setMarker_SMY(n){
  if(n == "AKUPANSI 0%"){
    markers_SMY_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SMY_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SMY_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_SMY_3 = [];
  }
  else if(n == "NORMAL"){
    markers_SMY_4 = [];
  }
  else if(n == "PENUH"){
    markers_SMY_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SMY_6 = [];
  }
  else if(n == "CLOSED"){
    markers_SMY_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_SMY_8 = [];
  }
  else if(n == "OTHER"){
    markers_SMY_9 = [];
  }
  else if(n == "aku"){
    markers_SMY_0 = [];
    markers_SMY_1 = [];
    markers_SMY_2 = [];
    markers_SMY_3 = [];
  }
  else if(n == "stat"){
    markers_SMY_4 = [];
    markers_SMY_5 = [];
    markers_SMY_6 = [];
    markers_SMY_7 = [];
    markers_SMY_8 = [];
    markers_SMY_9 = [];
  }
  else{
    markers_SMY_0 = [];
    markers_SMY_1 = [];
    markers_SMY_2 = [];
    markers_SMY_3 = [];
    markers_SMY_4 = [];
    markers_SMY_5 = [];
    markers_SMY_6 = [];
    markers_SMY_7 = [];
    markers_SMY_8 = [];
    markers_SMY_9 = [];
  }
}

function setMapOnAll_SMY(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_SMY_0.length; i++) {
      markers_SMY_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_SMY_1.length; i++) {
      markers_SMY_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_SMY_2.length; i++) {
      markers_SMY_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_SMY_3.length; i++) {
      markers_SMY_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_SMY_4.length; i++) {
      markers_SMY_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_SMY_5.length; i++) {
      markers_SMY_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_SMY_6.length; i++) {
      markers_SMY_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_SMY_7.length; i++) {
      markers_SMY_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_SMY_8.length; i++) {
      markers_SMY_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_SMY_9.length; i++) {
      markers_SMY_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_SMY_0.length; i++) {
      markers_SMY_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_1.length; i++) {
      markers_SMY_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_2.length; i++) {
      markers_SMY_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_3.length; i++) {
      markers_SMY_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_SMY_4.length; i++) {
      markers_SMY_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_5.length; i++) {
      markers_SMY_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_6.length; i++) {
      markers_SMY_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_7.length; i++) {
      markers_SMY_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_8.length; i++) {
      markers_SMY_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_9.length; i++) {
      markers_SMY_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_SMY_0.length; i++) {
      markers_SMY_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_1.length; i++) {
      markers_SMY_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_2.length; i++) {
      markers_SMY_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_3.length; i++) {
      markers_SMY_3[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_4.length; i++) {
      markers_SMY_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_5.length; i++) {
      markers_SMY_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_6.length; i++) {
      markers_SMY_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_7.length; i++) {
      markers_SMY_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_8.length; i++) {
      markers_SMY_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SMY_9.length; i++) {
      markers_SMY_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP SAU =======================//

function parseCreateMarker_SAU(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_SAU_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_SAU_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_SAU_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_SAU_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_SAU_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_SAU_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_SAU_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_SAU_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_SAU_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_SAU_6");
  }
  createMarker_SAU(nama_kelas,nilai);
}

function pushMarker_SAU(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_SAU_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SAU_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SAU_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_SAU_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_SAU_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_SAU_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SAU_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_SAU_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_SAU_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_SAU_9.push(marker);
  }
}

function setMarker_SAU(n){
  if(n == "AKUPANSI 0%"){
    markers_SAU_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SAU_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SAU_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_SAU_3 = [];
  }
  else if(n == "NORMAL"){
    markers_SAU_4 = [];
  }
  else if(n == "PENUH"){
    markers_SAU_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SAU_6 = [];
  }
  else if(n == "CLOSED"){
    markers_SAU_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_SAU_8 = [];
  }
  else if(n == "OTHER"){
    markers_SAU_9 = [];
  }
  else if(n == "aku"){
    markers_SAU_0 = [];
    markers_SAU_1 = [];
    markers_SAU_2 = [];
    markers_SAU_3 = [];
  }
  else if(n == "stat"){
    markers_SAU_4 = [];
    markers_SAU_5 = [];
    markers_SAU_6 = [];
    markers_SAU_7 = [];
    markers_SAU_8 = [];
    markers_SAU_9 = [];
  }
  else{
    markers_SAU_0 = [];
    markers_SAU_1 = [];
    markers_SAU_2 = [];
    markers_SAU_3 = [];
    markers_SAU_4 = [];
    markers_SAU_5 = [];
    markers_SAU_6 = [];
    markers_SAU_7 = [];
    markers_SAU_8 = [];
    markers_SAU_9 = [];
  }
}

function setMapOnAll_SAU(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_SAU_0.length; i++) {
      markers_SAU_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_SAU_1.length; i++) {
      markers_SAU_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_SAU_2.length; i++) {
      markers_SAU_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_SAU_3.length; i++) {
      markers_SAU_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_SAU_4.length; i++) {
      markers_SAU_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_SAU_5.length; i++) {
      markers_SAU_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_SAU_6.length; i++) {
      markers_SAU_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_SAU_7.length; i++) {
      markers_SAU_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_SAU_8.length; i++) {
      markers_SAU_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_SAU_9.length; i++) {
      markers_SAU_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_SAU_0.length; i++) {
      markers_SAU_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_1.length; i++) {
      markers_SAU_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_2.length; i++) {
      markers_SAU_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_3.length; i++) {
      markers_SAU_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_SAU_4.length; i++) {
      markers_SAU_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_5.length; i++) {
      markers_SAU_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_6.length; i++) {
      markers_SAU_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_7.length; i++) {
      markers_SAU_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_8.length; i++) {
      markers_SAU_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_9.length; i++) {
      markers_SAU_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_SAU_0.length; i++) {
      markers_SAU_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_1.length; i++) {
      markers_SAU_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_2.length; i++) {
      markers_SAU_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_3.length; i++) {
      markers_SAU_3[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_4.length; i++) {
      markers_SAU_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_5.length; i++) {
      markers_SAU_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_6.length; i++) {
      markers_SAU_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_7.length; i++) {
      markers_SAU_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_8.length; i++) {
      markers_SAU_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SAU_9.length; i++) {
      markers_SAU_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP BNO =======================//

function parseCreateMarker_BNO(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_BNO_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_BNO_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_BNO_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_BNO_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_BNO_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_BNO_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_BNO_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_BNO_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_BNO_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_BNO_6");
  }
  createMarker_BNO(nama_kelas,nilai);
}

function pushMarker_BNO(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_BNO_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_BNO_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_BNO_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_BNO_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_BNO_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_BNO_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_BNO_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_BNO_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_BNO_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_BNO_9.push(marker);
  }
}

function setMarker_BNO(n){
  if(n == "AKUPANSI 0%"){
    markers_BNO_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_BNO_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_BNO_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_BNO_3 = [];
  }
  else if(n == "NORMAL"){
    markers_BNO_4 = [];
  }
  else if(n == "PENUH"){
    markers_BNO_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_BNO_6 = [];
  }
  else if(n == "CLOSED"){
    markers_BNO_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_BNO_8 = [];
  }
  else if(n == "OTHER"){
    markers_BNO_9 = [];
  }
  else if(n == "aku"){
    markers_BNO_0 = [];
    markers_BNO_1 = [];
    markers_BNO_2 = [];
    markers_BNO_3 = [];
  }
  else if(n == "stat"){
    markers_BNO_4 = [];
    markers_BNO_5 = [];
    markers_BNO_6 = [];
    markers_BNO_7 = [];
    markers_BNO_8 = [];
    markers_BNO_9 = [];
  }
  else{
    markers_BNO_0 = [];
    markers_BNO_1 = [];
    markers_BNO_2 = [];
    markers_BNO_3 = [];
    markers_BNO_4 = [];
    markers_BNO_5 = [];
    markers_BNO_6 = [];
    markers_BNO_7 = [];
    markers_BNO_8 = [];
    markers_BNO_9 = [];
  }
}

function setMapOnAll_BNO(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_BNO_0.length; i++) {
      markers_BNO_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_BNO_1.length; i++) {
      markers_BNO_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_BNO_2.length; i++) {
      markers_BNO_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_BNO_3.length; i++) {
      markers_BNO_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_BNO_4.length; i++) {
      markers_BNO_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_BNO_5.length; i++) {
      markers_BNO_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_BNO_6.length; i++) {
      markers_BNO_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_BNO_7.length; i++) {
      markers_BNO_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_BNO_8.length; i++) {
      markers_BNO_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_BNO_9.length; i++) {
      markers_BNO_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_BNO_0.length; i++) {
      markers_BNO_0[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_1.length; i++) {
      markers_BNO_1[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_2.length; i++) {
      markers_BNO_2[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_3.length; i++) {
      markers_BNO_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_BNO_4.length; i++) {
      markers_BNO_4[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_5.length; i++) {
      markers_BNO_5[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_6.length; i++) {
      markers_BNO_6[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_7.length; i++) {
      markers_BNO_7[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_8.length; i++) {
      markers_BNO_8[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_9.length; i++) {
      markers_BNO_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_BNO_0.length; i++) {
      markers_BNO_0[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_1.length; i++) {
      markers_BNO_1[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_2.length; i++) {
      markers_BNO_2[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_3.length; i++) {
      markers_BNO_3[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_4.length; i++) {
      markers_BNO_4[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_5.length; i++) {
      markers_BNO_5[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_6.length; i++) {
      markers_BNO_6[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_7.length; i++) {
      markers_BNO_7[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_8.length; i++) {
      markers_BNO_8[i].setMap(map);
    }
    for (var i = 0; i < markers_BNO_9.length; i++) {
      markers_BNO_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP JBR =======================//

function parseCreateMarker_JBR(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_JBR_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_JBR_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_JBR_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_JBR_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_JBR_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_JBR_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_JBR_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_JBR_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_JBR_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_JBR_6");
  }
  createMarker_JBR(nama_kelas,nilai);
}

function pushMarker_JBR(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_JBR_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_JBR_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_JBR_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_JBR_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_JBR_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_JBR_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_JBR_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_JBR_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_JBR_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_JBR_9.push(marker);
  }
}

function setMarker_JBR(n){
  if(n == "AKUPANSI 0%"){
    markers_JBR_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_JBR_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_JBR_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_JBR_3 = [];
  }
  else if(n == "NORMAL"){
    markers_JBR_4 = [];
  }
  else if(n == "PENUH"){
    markers_JBR_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_JBR_6 = [];
  }
  else if(n == "CLOSED"){
    markers_JBR_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_JBR_8 = [];
  }
  else if(n == "OTHER"){
    markers_JBR_9 = [];
  }
  else if(n == "aku"){
    markers_JBR_0 = [];
    markers_JBR_1 = [];
    markers_JBR_2 = [];
    markers_JBR_3 = [];
  }
  else if(n == "stat"){
    markers_JBR_4 = [];
    markers_JBR_5 = [];
    markers_JBR_6 = [];
    markers_JBR_7 = [];
    markers_JBR_8 = [];
    markers_JBR_9 = [];
  }
  else{
    markers_JBR_0 = [];
    markers_JBR_1 = [];
    markers_JBR_2 = [];
    markers_JBR_3 = [];
    markers_JBR_4 = [];
    markers_JBR_5 = [];
    markers_JBR_6 = [];
    markers_JBR_7 = [];
    markers_JBR_8 = [];
    markers_JBR_9 = [];
  }
}

function setMapOnAll_JBR(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_JBR_0.length; i++) {
      markers_JBR_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_JBR_1.length; i++) {
      markers_JBR_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_JBR_2.length; i++) {
      markers_JBR_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_JBR_3.length; i++) {
      markers_JBR_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_JBR_4.length; i++) {
      markers_JBR_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_JBR_5.length; i++) {
      markers_JBR_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_JBR_6.length; i++) {
      markers_JBR_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_JBR_7.length; i++) {
      markers_JBR_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_JBR_8.length; i++) {
      markers_JBR_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_JBR_9.length; i++) {
      markers_JBR_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_JBR_0.length; i++) {
      markers_JBR_0[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_1.length; i++) {
      markers_JBR_1[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_2.length; i++) {
      markers_JBR_2[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_3.length; i++) {
      markers_JBR_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_JBR_4.length; i++) {
      markers_JBR_4[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_5.length; i++) {
      markers_JBR_5[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_6.length; i++) {
      markers_JBR_6[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_7.length; i++) {
      markers_JBR_7[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_8.length; i++) {
      markers_JBR_8[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_9.length; i++) {
      markers_JBR_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_JBR_0.length; i++) {
      markers_JBR_0[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_1.length; i++) {
      markers_JBR_1[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_2.length; i++) {
      markers_JBR_2[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_3.length; i++) {
      markers_JBR_3[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_4.length; i++) {
      markers_JBR_4[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_5.length; i++) {
      markers_JBR_5[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_6.length; i++) {
      markers_JBR_6[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_7.length; i++) {
      markers_JBR_7[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_8.length; i++) {
      markers_JBR_8[i].setMap(map);
    }
    for (var i = 0; i < markers_JBR_9.length; i++) {
      markers_JBR_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP KLM =======================//

function parseCreateMarker_KLM(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_KLM_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_KLM_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_KLM_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_KLM_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_KLM_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_KLM_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_KLM_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_KLM_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_KLM_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_KLM_6");
  }
  createMarker_KLM(nama_kelas,nilai);
}

function pushMarker_KLM(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_KLM_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_KLM_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_KLM_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_KLM_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_KLM_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_KLM_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_KLM_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_KLM_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_KLM_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_KLM_9.push(marker);
  }
}

function setMarker_KLM(n){
  if(n == "AKUPANSI 0%"){
    markers_KLM_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_KLM_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_KLM_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_KLM_3 = [];
  }
  else if(n == "NORMAL"){
    markers_KLM_4 = [];
  }
  else if(n == "PENUH"){
    markers_KLM_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_KLM_6 = [];
  }
  else if(n == "CLOSED"){
    markers_KLM_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_KLM_8 = [];
  }
  else if(n == "OTHER"){
    markers_KLM_9 = [];
  }
  else if(n == "aku"){
    markers_KLM_0 = [];
    markers_KLM_1 = [];
    markers_KLM_2 = [];
    markers_KLM_3 = [];
  }
  else if(n == "stat"){
    markers_KLM_4 = [];
    markers_KLM_5 = [];
    markers_KLM_6 = [];
    markers_KLM_7 = [];
    markers_KLM_8 = [];
    markers_KLM_9 = [];
  }
  else{
    markers_KLM_0 = [];
    markers_KLM_1 = [];
    markers_KLM_2 = [];
    markers_KLM_3 = [];
    markers_KLM_4 = [];
    markers_KLM_5 = [];
    markers_KLM_6 = [];
    markers_KLM_7 = [];
    markers_KLM_8 = [];
    markers_KLM_9 = [];
  }
}

function setMapOnAll_KLM(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_KLM_0.length; i++) {
      markers_KLM_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_KLM_1.length; i++) {
      markers_KLM_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_KLM_2.length; i++) {
      markers_KLM_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_KLM_3.length; i++) {
      markers_KLM_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_KLM_4.length; i++) {
      markers_KLM_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_KLM_5.length; i++) {
      markers_KLM_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_KLM_6.length; i++) {
      markers_KLM_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_KLM_7.length; i++) {
      markers_KLM_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_KLM_8.length; i++) {
      markers_KLM_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_KLM_9.length; i++) {
      markers_KLM_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_KLM_0.length; i++) {
      markers_KLM_0[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_1.length; i++) {
      markers_KLM_1[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_2.length; i++) {
      markers_KLM_2[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_3.length; i++) {
      markers_KLM_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_KLM_4.length; i++) {
      markers_KLM_4[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_5.length; i++) {
      markers_KLM_5[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_6.length; i++) {
      markers_KLM_6[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_7.length; i++) {
      markers_KLM_7[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_8.length; i++) {
      markers_KLM_8[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_9.length; i++) {
      markers_KLM_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_KLM_0.length; i++) {
      markers_KLM_0[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_1.length; i++) {
      markers_KLM_1[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_2.length; i++) {
      markers_KLM_2[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_3.length; i++) {
      markers_KLM_3[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_4.length; i++) {
      markers_KLM_4[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_5.length; i++) {
      markers_KLM_5[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_6.length; i++) {
      markers_KLM_6[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_7.length; i++) {
      markers_KLM_7[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_8.length; i++) {
      markers_KLM_8[i].setMap(map);
    }
    for (var i = 0; i < markers_KLM_9.length; i++) {
      markers_KLM_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP KUT =======================//

function parseCreateMarker_KUT(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_KUT_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_KUT_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_KUT_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_KUT_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_KUT_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_KUT_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_KUT_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_KUT_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_KUT_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_KUT_6");
  }
  createMarker_KUT(nama_kelas,nilai);
}

function pushMarker_KUT(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_KUT_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_KUT_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_KUT_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_KUT_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_KUT_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_KUT_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_KUT_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_KUT_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_KUT_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_KUT_9.push(marker);
  }
}

function setMarker_KUT(n){
  if(n == "AKUPANSI 0%"){
    markers_KUT_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_KUT_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_KUT_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_KUT_3 = [];
  }
  else if(n == "NORMAL"){
    markers_KUT_4 = [];
  }
  else if(n == "PENUH"){
    markers_KUT_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_KUT_6 = [];
  }
  else if(n == "CLOSED"){
    markers_KUT_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_KUT_8 = [];
  }
  else if(n == "OTHER"){
    markers_KUT_9 = [];
  }
  else if(n == "aku"){
    markers_KUT_0 = [];
    markers_KUT_1 = [];
    markers_KUT_2 = [];
    markers_KUT_3 = [];
  }
  else if(n == "stat"){
    markers_KUT_4 = [];
    markers_KUT_5 = [];
    markers_KUT_6 = [];
    markers_KUT_7 = [];
    markers_KUT_8 = [];
    markers_KUT_9 = [];
  }
  else{
    markers_KUT_0 = [];
    markers_KUT_1 = [];
    markers_KUT_2 = [];
    markers_KUT_3 = [];
    markers_KUT_4 = [];
    markers_KUT_5 = [];
    markers_KUT_6 = [];
    markers_KUT_7 = [];
    markers_KUT_8 = [];
    markers_KUT_9 = [];
  }
}

function setMapOnAll_KUT(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_KUT_0.length; i++) {
      markers_KUT_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_KUT_1.length; i++) {
      markers_KUT_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_KUT_2.length; i++) {
      markers_KUT_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_KUT_3.length; i++) {
      markers_KUT_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_KUT_4.length; i++) {
      markers_KUT_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_KUT_5.length; i++) {
      markers_KUT_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_KUT_6.length; i++) {
      markers_KUT_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_KUT_7.length; i++) {
      markers_KUT_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_KUT_8.length; i++) {
      markers_KUT_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_KUT_9.length; i++) {
      markers_KUT_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_KUT_0.length; i++) {
      markers_KUT_0[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_1.length; i++) {
      markers_KUT_1[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_2.length; i++) {
      markers_KUT_2[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_3.length; i++) {
      markers_KUT_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_KUT_4.length; i++) {
      markers_KUT_4[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_5.length; i++) {
      markers_KUT_5[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_6.length; i++) {
      markers_KUT_6[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_7.length; i++) {
      markers_KUT_7[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_8.length; i++) {
      markers_KUT_8[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_9.length; i++) {
      markers_KUT_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_KUT_0.length; i++) {
      markers_KUT_0[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_1.length; i++) {
      markers_KUT_1[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_2.length; i++) {
      markers_KUT_2[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_3.length; i++) {
      markers_KUT_3[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_4.length; i++) {
      markers_KUT_4[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_5.length; i++) {
      markers_KUT_5[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_6.length; i++) {
      markers_KUT_6[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_7.length; i++) {
      markers_KUT_7[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_8.length; i++) {
      markers_KUT_8[i].setMap(map);
    }
    for (var i = 0; i < markers_KUT_9.length; i++) {
      markers_KUT_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP MMN =======================//

function parseCreateMarker_MMN(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_MMN_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_MMN_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_MMN_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_MMN_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_MMN_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_MMN_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_MMN_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_MMN_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_MMN_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_MMN_6");
  }
  createMarker_MMN(nama_kelas,nilai);
}

function pushMarker_MMN(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_MMN_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_MMN_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_MMN_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_MMN_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_MMN_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_MMN_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_MMN_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_MMN_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_MMN_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_MMN_9.push(marker);
  }
}

function setMarker_MMN(n){
  if(n == "AKUPANSI 0%"){
    markers_MMN_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_MMN_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_MMN_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_MMN_3 = [];
  }
  else if(n == "NORMAL"){
    markers_MMN_4 = [];
  }
  else if(n == "PENUH"){
    markers_MMN_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_MMN_6 = [];
  }
  else if(n == "CLOSED"){
    markers_MMN_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_MMN_8 = [];
  }
  else if(n == "OTHER"){
    markers_MMN_9 = [];
  }
  else if(n == "aku"){
    markers_MMN_0 = [];
    markers_MMN_1 = [];
    markers_MMN_2 = [];
    markers_MMN_3 = [];
  }
  else if(n == "stat"){
    markers_MMN_4 = [];
    markers_MMN_5 = [];
    markers_MMN_6 = [];
    markers_MMN_7 = [];
    markers_MMN_8 = [];
    markers_MMN_9 = [];
  }
  else{
    markers_MMN_0 = [];
    markers_MMN_1 = [];
    markers_MMN_2 = [];
    markers_MMN_3 = [];
    markers_MMN_4 = [];
    markers_MMN_5 = [];
    markers_MMN_6 = [];
    markers_MMN_7 = [];
    markers_MMN_8 = [];
    markers_MMN_9 = [];
  }
}

function setMapOnAll_MMN(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_MMN_0.length; i++) {
      markers_MMN_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_MMN_1.length; i++) {
      markers_MMN_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_MMN_2.length; i++) {
      markers_MMN_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_MMN_3.length; i++) {
      markers_MMN_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_MMN_4.length; i++) {
      markers_MMN_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_MMN_5.length; i++) {
      markers_MMN_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_MMN_6.length; i++) {
      markers_MMN_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_MMN_7.length; i++) {
      markers_MMN_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_MMN_8.length; i++) {
      markers_MMN_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_MMN_9.length; i++) {
      markers_MMN_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_MMN_0.length; i++) {
      markers_MMN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_1.length; i++) {
      markers_MMN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_2.length; i++) {
      markers_MMN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_3.length; i++) {
      markers_MMN_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_MMN_4.length; i++) {
      markers_MMN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_5.length; i++) {
      markers_MMN_5[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_6.length; i++) {
      markers_MMN_6[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_7.length; i++) {
      markers_MMN_7[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_8.length; i++) {
      markers_MMN_8[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_9.length; i++) {
      markers_MMN_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_MMN_0.length; i++) {
      markers_MMN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_1.length; i++) {
      markers_MMN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_2.length; i++) {
      markers_MMN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_3.length; i++) {
      markers_MMN_3[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_4.length; i++) {
      markers_MMN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_5.length; i++) {
      markers_MMN_5[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_6.length; i++) {
      markers_MMN_6[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_7.length; i++) {
      markers_MMN_7[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_8.length; i++) {
      markers_MMN_8[i].setMap(map);
    }
    for (var i = 0; i < markers_MMN_9.length; i++) {
      markers_MMN_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP NSD =======================//

function parseCreateMarker_NSD(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_NSD_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_NSD_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_NSD_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_NSD_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_NSD_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_NSD_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_NSD_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_NSD_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_NSD_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_NSD_6");
  }
  createMarker_NSD(nama_kelas,nilai);
}

function pushMarker_NSD(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_NSD_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_NSD_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_NSD_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_NSD_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_NSD_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_NSD_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_NSD_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_NSD_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_NSD_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_NSD_9.push(marker);
  }
}

function setMarker_NSD(n){
  if(n == "AKUPANSI 0%"){
    markers_NSD_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_NSD_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_NSD_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_NSD_3 = [];
  }
  else if(n == "NORMAL"){
    markers_NSD_4 = [];
  }
  else if(n == "PENUH"){
    markers_NSD_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_NSD_6 = [];
  }
  else if(n == "CLOSED"){
    markers_NSD_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_NSD_8 = [];
  }
  else if(n == "OTHER"){
    markers_NSD_9 = [];
  }
  else if(n == "aku"){
    markers_NSD_0 = [];
    markers_NSD_1 = [];
    markers_NSD_2 = [];
    markers_NSD_3 = [];
  }
  else if(n == "stat"){
    markers_NSD_4 = [];
    markers_NSD_5 = [];
    markers_NSD_6 = [];
    markers_NSD_7 = [];
    markers_NSD_8 = [];
    markers_NSD_9 = [];
  }
  else{
    markers_NSD_0 = [];
    markers_NSD_1 = [];
    markers_NSD_2 = [];
    markers_NSD_3 = [];
    markers_NSD_4 = [];
    markers_NSD_5 = [];
    markers_NSD_6 = [];
    markers_NSD_7 = [];
    markers_NSD_8 = [];
    markers_NSD_9 = [];
  }
}

function setMapOnAll_NSD(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_NSD_0.length; i++) {
      markers_NSD_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_NSD_1.length; i++) {
      markers_NSD_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_NSD_2.length; i++) {
      markers_NSD_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_NSD_3.length; i++) {
      markers_NSD_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_NSD_4.length; i++) {
      markers_NSD_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_NSD_5.length; i++) {
      markers_NSD_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_NSD_6.length; i++) {
      markers_NSD_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_NSD_7.length; i++) {
      markers_NSD_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_NSD_8.length; i++) {
      markers_NSD_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_NSD_9.length; i++) {
      markers_NSD_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_NSD_0.length; i++) {
      markers_NSD_0[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_1.length; i++) {
      markers_NSD_1[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_2.length; i++) {
      markers_NSD_2[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_3.length; i++) {
      markers_NSD_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_NSD_4.length; i++) {
      markers_NSD_4[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_5.length; i++) {
      markers_NSD_5[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_6.length; i++) {
      markers_NSD_6[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_7.length; i++) {
      markers_NSD_7[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_8.length; i++) {
      markers_NSD_8[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_9.length; i++) {
      markers_NSD_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_NSD_0.length; i++) {
      markers_NSD_0[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_1.length; i++) {
      markers_NSD_1[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_2.length; i++) {
      markers_NSD_2[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_3.length; i++) {
      markers_NSD_3[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_4.length; i++) {
      markers_NSD_4[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_5.length; i++) {
      markers_NSD_5[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_6.length; i++) {
      markers_NSD_6[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_7.length; i++) {
      markers_NSD_7[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_8.length; i++) {
      markers_NSD_8[i].setMap(map);
    }
    for (var i = 0; i < markers_NSD_9.length; i++) {
      markers_NSD_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP SWI =======================//

function parseCreateMarker_SWI(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_SWI_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_SWI_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_SWI_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_SWI_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_SWI_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_SWI_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_SWI_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_SWI_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_SWI_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_SWI_6");
  }
  createMarker_SWI(nama_kelas,nilai);
}

function pushMarker_SWI(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_SWI_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SWI_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SWI_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_SWI_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_SWI_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_SWI_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SWI_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_SWI_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_SWI_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_SWI_9.push(marker);
  }
}

function setMarker_SWI(n){
  if(n == "AKUPANSI 0%"){
    markers_SWI_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_SWI_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_SWI_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_SWI_3 = [];
  }
  else if(n == "NORMAL"){
    markers_SWI_4 = [];
  }
  else if(n == "PENUH"){
    markers_SWI_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_SWI_6 = [];
  }
  else if(n == "CLOSED"){
    markers_SWI_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_SWI_8 = [];
  }
  else if(n == "OTHER"){
    markers_SWI_9 = [];
  }
  else if(n == "aku"){
    markers_SWI_0 = [];
    markers_SWI_1 = [];
    markers_SWI_2 = [];
    markers_SWI_3 = [];
  }
  else if(n == "stat"){
    markers_SWI_4 = [];
    markers_SWI_5 = [];
    markers_SWI_6 = [];
    markers_SWI_7 = [];
    markers_SWI_8 = [];
    markers_SWI_9 = [];
  }
  else{
    markers_SWI_0 = [];
    markers_SWI_1 = [];
    markers_SWI_2 = [];
    markers_SWI_3 = [];
    markers_SWI_4 = [];
    markers_SWI_5 = [];
    markers_SWI_6 = [];
    markers_SWI_7 = [];
    markers_SWI_8 = [];
    markers_SWI_9 = [];
  }
}

function setMapOnAll_SWI(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_SWI_0.length; i++) {
      markers_SWI_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_SWI_1.length; i++) {
      markers_SWI_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_SWI_2.length; i++) {
      markers_SWI_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_SWI_3.length; i++) {
      markers_SWI_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_SWI_4.length; i++) {
      markers_SWI_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_SWI_5.length; i++) {
      markers_SWI_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_SWI_6.length; i++) {
      markers_SWI_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_SWI_7.length; i++) {
      markers_SWI_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_SWI_8.length; i++) {
      markers_SWI_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_SWI_9.length; i++) {
      markers_SWI_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_SWI_0.length; i++) {
      markers_SWI_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_1.length; i++) {
      markers_SWI_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_2.length; i++) {
      markers_SWI_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_3.length; i++) {
      markers_SWI_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_SWI_4.length; i++) {
      markers_SWI_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_5.length; i++) {
      markers_SWI_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_6.length; i++) {
      markers_SWI_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_7.length; i++) {
      markers_SWI_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_8.length; i++) {
      markers_SWI_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_9.length; i++) {
      markers_SWI_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_SWI_0.length; i++) {
      markers_SWI_0[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_1.length; i++) {
      markers_SWI_1[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_2.length; i++) {
      markers_SWI_2[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_3.length; i++) {
      markers_SWI_3[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_4.length; i++) {
      markers_SWI_4[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_5.length; i++) {
      markers_SWI_5[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_6.length; i++) {
      markers_SWI_6[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_7.length; i++) {
      markers_SWI_7[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_8.length; i++) {
      markers_SWI_8[i].setMap(map);
    }
    for (var i = 0; i < markers_SWI_9.length; i++) {
      markers_SWI_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP TOP =======================//

function parseCreateMarker_TOP(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_TOP_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_TOP_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_TOP_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_TOP_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_TOP_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_TOP_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_TOP_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_TOP_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_TOP_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_TOP_6");
  }
  createMarker_TOP(nama_kelas,nilai);
}

function pushMarker_TOP(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_TOP_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_TOP_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_TOP_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_TOP_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_TOP_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_TOP_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_TOP_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_TOP_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_TOP_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_TOP_9.push(marker);
  }
}

function setMarker_TOP(n){
  if(n == "AKUPANSI 0%"){
    markers_TOP_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_TOP_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_TOP_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_TOP_3 = [];
  }
  else if(n == "NORMAL"){
    markers_TOP_4 = [];
  }
  else if(n == "PENUH"){
    markers_TOP_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_TOP_6 = [];
  }
  else if(n == "CLOSED"){
    markers_TOP_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_TOP_8 = [];
  }
  else if(n == "OTHER"){
    markers_TOP_9 = [];
  }
  else if(n == "aku"){
    markers_TOP_0 = [];
    markers_TOP_1 = [];
    markers_TOP_2 = [];
    markers_TOP_3 = [];
  }
  else if(n == "stat"){
    markers_TOP_4 = [];
    markers_TOP_5 = [];
    markers_TOP_6 = [];
    markers_TOP_7 = [];
    markers_TOP_8 = [];
    markers_TOP_9 = [];
  }
  else{
    markers_TOP_0 = [];
    markers_TOP_1 = [];
    markers_TOP_2 = [];
    markers_TOP_3 = [];
    markers_TOP_4 = [];
    markers_TOP_5 = [];
    markers_TOP_6 = [];
    markers_TOP_7 = [];
    markers_TOP_8 = [];
    markers_TOP_9 = [];
  }
}

function setMapOnAll_TOP(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_TOP_0.length; i++) {
      markers_TOP_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_TOP_1.length; i++) {
      markers_TOP_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_TOP_2.length; i++) {
      markers_TOP_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_TOP_3.length; i++) {
      markers_TOP_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_TOP_4.length; i++) {
      markers_TOP_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_TOP_5.length; i++) {
      markers_TOP_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_TOP_6.length; i++) {
      markers_TOP_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_TOP_7.length; i++) {
      markers_TOP_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_TOP_8.length; i++) {
      markers_TOP_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_TOP_9.length; i++) {
      markers_TOP_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_TOP_0.length; i++) {
      markers_TOP_0[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_1.length; i++) {
      markers_TOP_1[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_2.length; i++) {
      markers_TOP_2[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_3.length; i++) {
      markers_TOP_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_TOP_4.length; i++) {
      markers_TOP_4[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_5.length; i++) {
      markers_TOP_5[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_6.length; i++) {
      markers_TOP_6[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_7.length; i++) {
      markers_TOP_7[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_8.length; i++) {
      markers_TOP_8[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_9.length; i++) {
      markers_TOP_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_TOP_0.length; i++) {
      markers_TOP_0[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_1.length; i++) {
      markers_TOP_1[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_2.length; i++) {
      markers_TOP_2[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_3.length; i++) {
      markers_TOP_3[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_4.length; i++) {
      markers_TOP_4[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_5.length; i++) {
      markers_TOP_5[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_6.length; i++) {
      markers_TOP_6[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_7.length; i++) {
      markers_TOP_7[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_8.length; i++) {
      markers_TOP_8[i].setMap(map);
    }
    for (var i = 0; i < markers_TOP_9.length; i++) {
      markers_TOP_9[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di ODP UBN =======================//

function parseCreateMarker_UBN(nilai){
  var nama_kelas;
  if(nilai == "AKUPANSI 0%"){
    nama_kelas = document.getElementById("aku_UBN_0");
  }
  else if(nilai == "AKUPANSI 0,1% - 40%"){
    nama_kelas = document.getElementById("aku_UBN_1");
  }
  else if(nilai == "AKUPANSI 41% - 80%"){
    nama_kelas = document.getElementById("aku_UBN_2");
  }
  else if(nilai == "DIATAS 80%"){
    nama_kelas = document.getElementById("aku_UBN_3");
  }
  else if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("stat_UBN_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("stat_UBN_2");
  }
  else if(nilai == "LOSS/REDAMAN TINGGI"){
    nama_kelas = document.getElementById("stat_UBN_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("stat_UBN_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("stat_UBN_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("stat_UBN_6");
  }
  createMarker_UBN(nama_kelas,nilai);
}

function pushMarker_UBN(n,marker){
  if(n == "AKUPANSI 0%"){
    markers_UBN_0.push(marker);
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_UBN_1.push(marker);
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_UBN_2.push(marker);
  }
  else if(n == "DIATAS 80%"){
    markers_UBN_3.push(marker);
  }
  else if(n == "NORMAL"){
    markers_UBN_4.push(marker);
  }
  else if(n == "PENUH"){
    markers_UBN_5.push(marker);

  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_UBN_6.push(marker);
  }
  else if(n == "CLOSED"){
    markers_UBN_7.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_UBN_8.push(marker);
  }
  else if(n == "OTHER"){
    markers_UBN_9.push(marker);
  }
}

function setMarker_UBN(n){
  if(n == "AKUPANSI 0%"){
    markers_UBN_0 = [];
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    markers_UBN_1 = [];
  }
  else if(n == "AKUPANSI 41% - 80%"){
    markers_UBN_2 = [];
  }
  else if(n == "DIATAS 80%"){
    markers_UBN_3 = [];
  }
  else if(n == "NORMAL"){
    markers_UBN_4 = [];
  }
  else if(n == "PENUH"){
    markers_UBN_5 = [];
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    markers_UBN_6 = [];
  }
  else if(n == "CLOSED"){
    markers_UBN_7 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_UBN_8 = [];
  }
  else if(n == "OTHER"){
    markers_UBN_9 = [];
  }
  else if(n == "aku"){
    markers_UBN_0 = [];
    markers_UBN_1 = [];
    markers_UBN_2 = [];
    markers_UBN_3 = [];
  }
  else if(n == "stat"){
    markers_UBN_4 = [];
    markers_UBN_5 = [];
    markers_UBN_6 = [];
    markers_UBN_7 = [];
    markers_UBN_8 = [];
    markers_UBN_9 = [];
  }
  else{
    markers_UBN_0 = [];
    markers_UBN_1 = [];
    markers_UBN_2 = [];
    markers_UBN_3 = [];
    markers_UBN_4 = [];
    markers_UBN_5 = [];
    markers_UBN_6 = [];
    markers_UBN_7 = [];
    markers_UBN_8 = [];
    markers_UBN_9 = [];
  }
}

function setMapOnAll_UBN(map,n) {
  if(n == "AKUPANSI 0%"){
    for (var i = 0; i < markers_UBN_0.length; i++) {
      markers_UBN_0[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 0,1% - 40%"){
    for (var i = 0; i < markers_UBN_1.length; i++) {
      markers_UBN_1[i].setMap(map);
    }
  }
  else if(n == "AKUPANSI 41% - 80%"){
    for (var i = 0; i < markers_UBN_2.length; i++) {
      markers_UBN_2[i].setMap(map);
    }
  }
  else if(n == "DIATAS 80%"){
    for (var i = 0; i < markers_UBN_3.length; i++) {
      markers_UBN_3[i].setMap(map);
    }
  }
  else if(n == "NORMAL"){
    for (var i = 0; i < markers_UBN_4.length; i++) {
      markers_UBN_4[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_UBN_5.length; i++) {
      markers_UBN_5[i].setMap(map);
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    for (var i = 0; i < markers_UBN_6.length; i++) {
      markers_UBN_6[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_UBN_7.length; i++) {
      markers_UBN_7[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_UBN_8.length; i++) {
      markers_UBN_8[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_UBN_9.length; i++) {
      markers_UBN_9[i].setMap(map);
    }
  }
  else if(n == "aku"){
    for (var i = 0; i < markers_UBN_0.length; i++) {
      markers_UBN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_1.length; i++) {
      markers_UBN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_2.length; i++) {
      markers_UBN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_3.length; i++) {
      markers_UBN_3[i].setMap(map);
    }
  }
  else if(n == "stat"){
    for (var i = 0; i < markers_UBN_4.length; i++) {
      markers_UBN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_5.length; i++) {
      markers_UBN_5[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_6.length; i++) {
      markers_UBN_6[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_7.length; i++) {
      markers_UBN_7[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_8.length; i++) {
      markers_UBN_8[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_9.length; i++) {
      markers_UBN_9[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_UBN_0.length; i++) {
      markers_UBN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_1.length; i++) {
      markers_UBN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_2.length; i++) {
      markers_UBN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_3.length; i++) {
      markers_UBN_3[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_4.length; i++) {
      markers_UBN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_5.length; i++) {
      markers_UBN_5[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_6.length; i++) {
      markers_UBN_6[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_7.length; i++) {
      markers_UBN_7[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_8.length; i++) {
      markers_UBN_8[i].setMap(map);
    }
    for (var i = 0; i < markers_UBN_9.length; i++) {
      markers_UBN_9[i].setMap(map);
    }
  }
}

//======================================================================================================//

//============================ Inisiasi Array DP =====================================//
var markers_dp = [];
//SMY
var markers_dp_SMY_0 = [];
var markers_dp_SMY_1 = [];
var markers_dp_SMY_2 = [];
var markers_dp_SMY_3 = [];
var markers_dp_SMY_4 = [];
var markers_dp_SMY_5 = [];
//SAU
var markers_dp_SAU_0 = [];
var markers_dp_SAU_1 = [];
var markers_dp_SAU_2 = [];
var markers_dp_SAU_3 = [];
var markers_dp_SAU_4 = [];
var markers_dp_SAU_5 = [];
//BNO
var markers_dp_BNO_0 = [];
var markers_dp_BNO_1 = [];
var markers_dp_BNO_2 = [];
var markers_dp_BNO_3 = [];
var markers_dp_BNO_4 = [];
var markers_dp_BNO_5 = [];
//JBR
var markers_dp_JBR_0 = [];
var markers_dp_JBR_1 = [];
var markers_dp_JBR_2 = [];
var markers_dp_JBR_3 = [];
var markers_dp_JBR_4 = [];
var markers_dp_JBR_5 = [];
//KLM
var markers_dp_KLM_0 = [];
var markers_dp_KLM_1 = [];
var markers_dp_KLM_2 = [];
var markers_dp_KLM_3 = [];
var markers_dp_KLM_4 = [];
var markers_dp_KLM_5 = [];
//KUT
var markers_dp_KUT_0 = [];
var markers_dp_KUT_1 = [];
var markers_dp_KUT_2 = [];
var markers_dp_KUT_3 = [];
var markers_dp_KUT_4 = [];
var markers_dp_KUT_5 = [];
//MMN
var markers_dp_MMN_0 = [];
var markers_dp_MMN_1 = [];
var markers_dp_MMN_2 = [];
var markers_dp_MMN_3 = [];
var markers_dp_MMN_4 = [];
var markers_dp_MMN_5 = [];
//NDA
var markers_dp_NDA_0 = [];
var markers_dp_NDA_1 = [];
var markers_dp_NDA_2 = [];
var markers_dp_NDA_3 = [];
var markers_dp_NDA_4 = [];
var markers_dp_NDA_5 = [];
//SWI
var markers_dp_SWI_0 = [];
var markers_dp_SWI_1 = [];
var markers_dp_SWI_2 = [];
var markers_dp_SWI_3 = [];
var markers_dp_SWI_4 = [];
var markers_dp_SWI_5 = [];
//TOP
var markers_dp_TOP_0 = [];
var markers_dp_TOP_1 = [];
var markers_dp_TOP_2 = [];
var markers_dp_TOP_3 = [];
var markers_dp_TOP_4 = [];
var markers_dp_TOP_5 = [];
//UBN
var markers_dp_UBN_0 = [];
var markers_dp_UBN_1 = [];
var markers_dp_UBN_2 = [];
var markers_dp_UBN_3 = [];
var markers_dp_UBN_4 = [];
var markers_dp_UBN_5 = [];

//================== JavaScript untuk Maps di Cari DP=======================//

function pushMarkerDP(marker){
  markers_dp.push(marker);
}

function setMarkerDP(){
  markers_dp = [];
}

function setMapOnAllDP(map){
  for(var i = 0; i < markers_dp.length; i++){
    markers_dp[i].setMap(map);
  }
}

//================== JavaScript untuk Maps di DP SMY =======================//

function parseCreateMarkerDP_SMY(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_SMY_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_SMY_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_SMY_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_SMY_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_SMY_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_SMY_6");
  }
  createMarkerDP_SMY(nama_kelas,nilai);
}

function pushMarkerDP_SMY(n,marker){
  if(n == "NORMAL"){
    markers_dp_SMY_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_SMY_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_SMY_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_SMY_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SMY_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_SMY_5.push(marker);
  }
}

function setMarkerDP_SMY(n){
  if(n == "NORMAL"){
    markers_dp_SMY_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_SMY_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_SMY_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_SMY_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SMY_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_SMY_5 = [];
  }
  else{
    markers_dp_SMY_0 = [];
    markers_dp_SMY_1 = [];
    markers_dp_SMY_2 = [];
    markers_dp_SMY_3 = [];
    markers_dp_SMY_4 = [];
    markers_dp_SMY_5 = [];
  }
}

function setMapOnAllDP_SMY(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_SMY_0.length; i++) {
      markers_dp_SMY_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_SMY_1.length; i++) {
      markers_dp_SMY_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_SMY_2.length; i++) {
      markers_dp_SMY_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_SMY_3.length; i++) {
      markers_dp_SMY_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_SMY_4.length; i++) {
      markers_dp_SMY_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_SMY_5.length; i++) {
      markers_dp_SMY_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_SMY_0.length; i++) {
      markers_dp_SMY_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SMY_1.length; i++) {
      markers_dp_SMY_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SMY_2.length; i++) {
      markers_dp_SMY_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SMY_3.length; i++) {
      markers_dp_SMY_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SMY_4.length; i++) {
      markers_dp_SMY_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SMY_5.length; i++) {
      markers_dp_SMY_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP SAU =======================//

function parseCreateMarkerDP_SAU(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_SAU_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_SAU_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_SAU_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_SAU_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_SAU_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_SAU_6");
  }
  createMarkerDP_SAU(nama_kelas,nilai);
}

function pushMarkerDP_SAU(n,marker){
  if(n == "NORMAL"){
    markers_dp_SAU_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_SAU_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_SAU_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_SAU_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SAU_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_SAU_5.push(marker);
  }
}

function setMarkerDP_SAU(n){
  if(n == "NORMAL"){
    markers_dp_SAU_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_SAU_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_SAU_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_SAU_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SAU_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_SAU_5 = [];
  }
  else{
    markers_dp_SAU_0 = [];
    markers_dp_SAU_1 = [];
    markers_dp_SAU_2 = [];
    markers_dp_SAU_3 = [];
    markers_dp_SAU_4 = [];
    markers_dp_SAU_5 = [];
  }
}

function setMapOnAllDP_SAU(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_SAU_0.length; i++) {
      markers_dp_SAU_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_SAU_1.length; i++) {
      markers_dp_SAU_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_SAU_2.length; i++) {
      markers_dp_SAU_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_SAU_3.length; i++) {
      markers_dp_SAU_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_SAU_4.length; i++) {
      markers_dp_SAU_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_SAU_5.length; i++) {
      markers_dp_SAU_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_SAU_0.length; i++) {
      markers_dp_SAU_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SAU_1.length; i++) {
      markers_dp_SAU_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SAU_2.length; i++) {
      markers_dp_SAU_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SAU_3.length; i++) {
      markers_dp_SAU_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SAU_4.length; i++) {
      markers_dp_SAU_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SAU_5.length; i++) {
      markers_dp_SAU_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP BNO =======================//

function parseCreateMarkerDP_BNO(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_BNO_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_BNO_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_BNO_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_BNO_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_BNO_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_BNO_6");
  }
  createMarkerDP_BNO(nama_kelas,nilai);
}

function pushMarkerDP_BNO(n,marker){
  if(n == "NORMAL"){
    markers_dp_BNO_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_BNO_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_BNO_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_BNO_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_BNO_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_BNO_5.push(marker);
  }
}

function setMarkerDP_BNO(n){
  if(n == "NORMAL"){
    markers_dp_BNO_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_BNO_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_BNO_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_BNO_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_BNO_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_BNO_5 = [];
  }
  else{
    markers_dp_BNO_0 = [];
    markers_dp_BNO_1 = [];
    markers_dp_BNO_2 = [];
    markers_dp_BNO_3 = [];
    markers_dp_BNO_4 = [];
    markers_dp_BNO_5 = [];
  }
}

function setMapOnAllDP_BNO(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_BNO_0.length; i++) {
      markers_dp_BNO_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_BNO_1.length; i++) {
      markers_dp_BNO_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_BNO_2.length; i++) {
      markers_dp_BNO_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_BNO_3.length; i++) {
      markers_dp_BNO_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_BNO_4.length; i++) {
      markers_dp_BNO_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_BNO_5.length; i++) {
      markers_dp_BNO_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_BNO_0.length; i++) {
      markers_dp_BNO_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_BNO_1.length; i++) {
      markers_dp_BNO_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_BNO_2.length; i++) {
      markers_dp_BNO_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_BNO_3.length; i++) {
      markers_dp_BNO_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_BNO_4.length; i++) {
      markers_dp_BNO_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_BNO_5.length; i++) {
      markers_dp_BNO_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP JBR =======================//

function parseCreateMarkerDP_JBR(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_JBR_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_JBR_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_JBR_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_JBR_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_JBR_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_JBR_6");
  }
  createMarkerDP_JBR(nama_kelas,nilai);
}

function pushMarkerDP_JBR(n,marker){
  if(n == "NORMAL"){
    markers_dp_JBR_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_JBR_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_JBR_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_JBR_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_JBR_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_JBR_5.push(marker);
  }
}

function setMarkerDP_JBR(n){
  if(n == "NORMAL"){
    markers_dp_JBR_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_JBR_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_JBR_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_JBR_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_JBR_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_JBR_5 = [];
  }
  else{
    markers_dp_JBR_0 = [];
    markers_dp_JBR_1 = [];
    markers_dp_JBR_2 = [];
    markers_dp_JBR_3 = [];
    markers_dp_JBR_4 = [];
    markers_dp_JBR_5 = [];
  }
}

function setMapOnAllDP_JBR(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_JBR_0.length; i++) {
      markers_dp_JBR_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_JBR_1.length; i++) {
      markers_dp_JBR_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_JBR_2.length; i++) {
      markers_dp_JBR_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_JBR_3.length; i++) {
      markers_dp_JBR_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_JBR_4.length; i++) {
      markers_dp_JBR_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_JBR_5.length; i++) {
      markers_dp_JBR_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_JBR_0.length; i++) {
      markers_dp_JBR_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_JBR_1.length; i++) {
      markers_dp_JBR_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_JBR_2.length; i++) {
      markers_dp_JBR_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_JBR_3.length; i++) {
      markers_dp_JBR_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_JBR_4.length; i++) {
      markers_dp_JBR_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_JBR_5.length; i++) {
      markers_dp_JBR_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP KLM =======================//

function parseCreateMarkerDP_KLM(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_KLM_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_KLM_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_KLM_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_KLM_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_KLM_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_KLM_6");
  }
  createMarkerDP_KLM(nama_kelas,nilai);
}

function pushMarkerDP_KLM(n,marker){
  if(n == "NORMAL"){
    markers_dp_KLM_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_KLM_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_KLM_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_KLM_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_KLM_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_KLM_5.push(marker);
  }
}

function setMarkerDP_KLM(n){
  if(n == "NORMAL"){
    markers_dp_KLM_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_KLM_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_KLM_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_KLM_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_KLM_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_KLM_5 = [];
  }
  else{
    markers_dp_KLM_0 = [];
    markers_dp_KLM_1 = [];
    markers_dp_KLM_2 = [];
    markers_dp_KLM_3 = [];
    markers_dp_KLM_4 = [];
    markers_dp_KLM_5 = [];
  }
}

function setMapOnAllDP_KLM(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_KLM_0.length; i++) {
      markers_dp_KLM_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_KLM_1.length; i++) {
      markers_dp_KLM_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_KLM_2.length; i++) {
      markers_dp_KLM_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_KLM_3.length; i++) {
      markers_dp_KLM_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_KLM_4.length; i++) {
      markers_dp_KLM_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_KLM_5.length; i++) {
      markers_dp_KLM_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_KLM_0.length; i++) {
      markers_dp_KLM_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KLM_1.length; i++) {
      markers_dp_KLM_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KLM_2.length; i++) {
      markers_dp_KLM_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KLM_3.length; i++) {
      markers_dp_KLM_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KLM_4.length; i++) {
      markers_dp_KLM_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KLM_5.length; i++) {
      markers_dp_KLM_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP KUT =======================//

function parseCreateMarkerDP_KUT(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_KUT_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_KUT_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_KUT_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_KUT_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_KUT_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_KUT_6");
  }
  createMarkerDP_KUT(nama_kelas,nilai);
}

function pushMarkerDP_KUT(n,marker){
  if(n == "NORMAL"){
    markers_dp_KUT_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_KUT_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_KUT_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_KUT_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_KUT_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_KUT_5.push(marker);
  }
}

function setMarkerDP_KUT(n){
  if(n == "NORMAL"){
    markers_dp_KUT_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_KUT_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_KUT_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_KUT_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_KUT_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_KUT_5 = [];
  }
  else{
    markers_dp_KUT_0 = [];
    markers_dp_KUT_1 = [];
    markers_dp_KUT_2 = [];
    markers_dp_KUT_3 = [];
    markers_dp_KUT_4 = [];
    markers_dp_KUT_5 = [];
  }
}

function setMapOnAllDP_KUT(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_KUT_0.length; i++) {
      markers_dp_KUT_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_KUT_1.length; i++) {
      markers_dp_KUT_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_KUT_2.length; i++) {
      markers_dp_KUT_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_KUT_3.length; i++) {
      markers_dp_KUT_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_KUT_4.length; i++) {
      markers_dp_KUT_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_KUT_5.length; i++) {
      markers_dp_KUT_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_KUT_0.length; i++) {
      markers_dp_KUT_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KUT_1.length; i++) {
      markers_dp_KUT_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KUT_2.length; i++) {
      markers_dp_KUT_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KUT_3.length; i++) {
      markers_dp_KUT_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KUT_4.length; i++) {
      markers_dp_KUT_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_KUT_5.length; i++) {
      markers_dp_KUT_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP MMN =======================//

function parseCreateMarkerDP_MMN(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_MMN_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_MMN_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_MMN_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_MMN_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_MMN_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_MMN_6");
  }
  createMarkerDP_MMN(nama_kelas,nilai);
}

function pushMarkerDP_MMN(n,marker){
  if(n == "NORMAL"){
    markers_dp_MMN_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_MMN_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_MMN_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_MMN_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_MMN_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_MMN_5.push(marker);
  }
}

function setMarkerDP_MMN(n){
  if(n == "NORMAL"){
    markers_dp_MMN_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_MMN_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_MMN_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_MMN_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_MMN_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_MMN_5 = [];
  }
  else{
    markers_dp_MMN_0 = [];
    markers_dp_MMN_1 = [];
    markers_dp_MMN_2 = [];
    markers_dp_MMN_3 = [];
    markers_dp_MMN_4 = [];
    markers_dp_MMN_5 = [];
  }
}

function setMapOnAllDP_MMN(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_MMN_0.length; i++) {
      markers_dp_MMN_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_MMN_1.length; i++) {
      markers_dp_MMN_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_MMN_2.length; i++) {
      markers_dp_MMN_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_MMN_3.length; i++) {
      markers_dp_MMN_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_MMN_4.length; i++) {
      markers_dp_MMN_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_MMN_5.length; i++) {
      markers_dp_MMN_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_MMN_0.length; i++) {
      markers_dp_MMN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_MMN_1.length; i++) {
      markers_dp_MMN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_MMN_2.length; i++) {
      markers_dp_MMN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_MMN_3.length; i++) {
      markers_dp_MMN_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_MMN_4.length; i++) {
      markers_dp_MMN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_MMN_5.length; i++) {
      markers_dp_MMN_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP NDA =======================//

function parseCreateMarkerDP_NDA(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_NDA_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_NDA_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_NDA_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_NDA_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_NDA_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_NDA_6");
  }
  createMarkerDP_NDA(nama_kelas,nilai);
}

function pushMarkerDP_NDA(n,marker){
  if(n == "NORMAL"){
    markers_dp_NDA_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_NDA_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_NDA_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_NDA_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_NDA_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_NDA_5.push(marker);
  }
}

function setMarkerDP_NDA(n){
  if(n == "NORMAL"){
    markers_dp_NDA_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_NDA_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_NDA_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_NDA_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_NDA_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_NDA_5 = [];
  }
  else{
    markers_dp_NDA_0 = [];
    markers_dp_NDA_1 = [];
    markers_dp_NDA_2 = [];
    markers_dp_NDA_3 = [];
    markers_dp_NDA_4 = [];
    markers_dp_NDA_5 = [];
  }
}

function setMapOnAllDP_NDA(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_NDA_0.length; i++) {
      markers_dp_NDA_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_NDA_1.length; i++) {
      markers_dp_NDA_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_NDA_2.length; i++) {
      markers_dp_NDA_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_NDA_3.length; i++) {
      markers_dp_NDA_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_NDA_4.length; i++) {
      markers_dp_NDA_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_NDA_5.length; i++) {
      markers_dp_NDA_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_NDA_0.length; i++) {
      markers_dp_NDA_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_NDA_1.length; i++) {
      markers_dp_NDA_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_NDA_2.length; i++) {
      markers_dp_NDA_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_NDA_3.length; i++) {
      markers_dp_NDA_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_NDA_4.length; i++) {
      markers_dp_NDA_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_NDA_5.length; i++) {
      markers_dp_NDA_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP SWI =======================//

function parseCreateMarkerDP_SWI(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_SWI_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_SWI_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_SWI_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_SWI_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_SWI_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_SWI_6");
  }
  createMarkerDP_SWI(nama_kelas,nilai);
}

function pushMarkerDP_SWI(n,marker){
  if(n == "NORMAL"){
    markers_dp_SWI_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_SWI_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_SWI_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_SWI_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SWI_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_SWI_5.push(marker);
  }
}

function setMarkerDP_SWI(n){
  if(n == "NORMAL"){
    markers_dp_SWI_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_SWI_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_SWI_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_SWI_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_SWI_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_SWI_5 = [];
  }
  else{
    markers_dp_SWI_0 = [];
    markers_dp_SWI_1 = [];
    markers_dp_SWI_2 = [];
    markers_dp_SWI_3 = [];
    markers_dp_SWI_4 = [];
    markers_dp_SWI_5 = [];
  }
}

function setMapOnAllDP_SWI(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_SWI_0.length; i++) {
      markers_dp_SWI_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_SWI_1.length; i++) {
      markers_dp_SWI_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_SWI_2.length; i++) {
      markers_dp_SWI_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_SWI_3.length; i++) {
      markers_dp_SWI_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_SWI_4.length; i++) {
      markers_dp_SWI_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_SWI_5.length; i++) {
      markers_dp_SWI_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_SWI_0.length; i++) {
      markers_dp_SWI_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SWI_1.length; i++) {
      markers_dp_SWI_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SWI_2.length; i++) {
      markers_dp_SWI_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SWI_3.length; i++) {
      markers_dp_SWI_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SWI_4.length; i++) {
      markers_dp_SWI_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_SWI_5.length; i++) {
      markers_dp_SWI_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP TOP =======================//

function parseCreateMarkerDP_TOP(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_TOP_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_TOP_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_TOP_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_TOP_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_TOP_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_TOP_6");
  }
  createMarkerDP_TOP(nama_kelas,nilai);
}

function pushMarkerDP_TOP(n,marker){
  if(n == "NORMAL"){
    markers_dp_TOP_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_TOP_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_TOP_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_TOP_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_TOP_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_TOP_5.push(marker);
  }
}

function setMarkerDP_TOP(n){
  if(n == "NORMAL"){
    markers_dp_TOP_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_TOP_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_TOP_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_TOP_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_TOP_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_TOP_5 = [];
  }
  else{
    markers_dp_TOP_0 = [];
    markers_dp_TOP_1 = [];
    markers_dp_TOP_2 = [];
    markers_dp_TOP_3 = [];
    markers_dp_TOP_4 = [];
    markers_dp_TOP_5 = [];
  }
}

function setMapOnAllDP_TOP(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_TOP_0.length; i++) {
      markers_dp_TOP_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_TOP_1.length; i++) {
      markers_dp_TOP_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_TOP_2.length; i++) {
      markers_dp_TOP_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_TOP_3.length; i++) {
      markers_dp_TOP_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_TOP_4.length; i++) {
      markers_dp_TOP_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_TOP_5.length; i++) {
      markers_dp_TOP_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_TOP_0.length; i++) {
      markers_dp_TOP_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_TOP_1.length; i++) {
      markers_dp_TOP_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_TOP_2.length; i++) {
      markers_dp_TOP_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_TOP_3.length; i++) {
      markers_dp_TOP_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_TOP_4.length; i++) {
      markers_dp_TOP_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_TOP_5.length; i++) {
      markers_dp_TOP_5[i].setMap(map);
    }
  }
}

//================== JavaScript untuk Maps di DP UBN =======================//

function parseCreateMarkerDP_UBN(nilai){
  var nama_kelas;
  if(nilai == "NORMAL"){
    nama_kelas = document.getElementById("dp_UBN_1");
  }
  else if(nilai == "PENUH"){
    nama_kelas = document.getElementById("dp_UBN_2");
  }
  else if(nilai == "NO TONE"){
    nama_kelas = document.getElementById("dp_UBN_3");
  }
  else if(nilai == "CLOSED"){
    nama_kelas = document.getElementById("dp_UBN_4");
  }
  else if(nilai == "ON PROGRESS"){
    nama_kelas = document.getElementById("dp_UBN_5");
  }
  else if(nilai == "OTHER"){
    nama_kelas = document.getElementById("dp_UBN_6");
  }
  createMarkerDP_UBN(nama_kelas,nilai);
}

function pushMarkerDP_UBN(n,marker){
  if(n == "NORMAL"){
    markers_dp_UBN_0.push(marker);
  }
  else if(n == "PENUH"){
    markers_dp_UBN_1.push(marker);

  }
  else if(n == "NO TONE"){
    markers_dp_UBN_2.push(marker);
  }
  else if(n == "CLOSED"){
    markers_dp_UBN_3.push(marker);
  }
  else if(n == "ON PROGRESS"){
    markers_dp_UBN_4.push(marker);
  }
  else if(n == "OTHER"){
    markers_dp_UBN_5.push(marker);
  }
}

function setMarkerDP_UBN(n){
  if(n == "NORMAL"){
    markers_dp_UBN_0 = [];
  }
  else if(n == "PENUH"){
    markers_dp_UBN_1 = [];
  }
  else if(n == "NO TONE"){
    markers_dp_UBN_2 = [];
  }
  else if(n == "CLOSED"){
    markers_dp_UBN_3 = [];
  }
  else if(n == "ON PROGRESS"){
    markers_dp_UBN_4 = [];
  }
  else if(n == "OTHER"){
    markers_dp_UBN_5 = [];
  }
  else{
    markers_dp_UBN_0 = [];
    markers_dp_UBN_1 = [];
    markers_dp_UBN_2 = [];
    markers_dp_UBN_3 = [];
    markers_dp_UBN_4 = [];
    markers_dp_UBN_5 = [];
  }
}

function setMapOnAllDP_UBN(map,n) {
  if(n == "NORMAL"){
    for (var i = 0; i < markers_dp_UBN_0.length; i++) {
      markers_dp_UBN_0[i].setMap(map);
    }
  }
  else if(n == "PENUH"){
    for (var i = 0; i < markers_dp_UBN_1.length; i++) {
      markers_dp_UBN_1[i].setMap(map);
    }
  }
  else if(n == "NO TONE"){
    for (var i = 0; i < markers_dp_UBN_2.length; i++) {
      markers_dp_UBN_2[i].setMap(map);
    }
  }
  else if(n == "CLOSED"){
    for (var i = 0; i < markers_dp_UBN_3.length; i++) {
      markers_dp_UBN_3[i].setMap(map);
    }
  }
  else if(n == "ON PROGRESS"){
    for (var i = 0; i < markers_dp_UBN_4.length; i++) {
      markers_dp_UBN_4[i].setMap(map);
    }
  }
  else if(n == "OTHER"){
    for (var i = 0; i < markers_dp_UBN_5.length; i++) {
      markers_dp_UBN_5[i].setMap(map);
    }
  }
  else{
    for (var i = 0; i < markers_dp_UBN_0.length; i++) {
      markers_dp_UBN_0[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_UBN_1.length; i++) {
      markers_dp_UBN_1[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_UBN_2.length; i++) {
      markers_dp_UBN_2[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_UBN_3.length; i++) {
      markers_dp_UBN_3[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_UBN_4.length; i++) {
      markers_dp_UBN_4[i].setMap(map);
    }
    for (var i = 0; i < markers_dp_UBN_5.length; i++) {
      markers_dp_UBN_5[i].setMap(map);
    }
  }
}