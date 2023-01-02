
var btn = document.getElementById("nextbtn");
var checks = document.getElementsByClassName("form-check-input");
var checkslength = 0;
for(var c =0; c < checks.length; c++) {
    checks[c].onchange = function() {
                            if(this.checked) {
                                checkslength++;
                                console.log(checkslength);
                                if(checkslength == 33) {
                                    btn.disabled = false;
                                }

                            }

                        }
}

window.onload = function () {

    var chks = [];
    var counter = 0;
    var row = [];

    row[0] = document.getElementsByClassName("questionrow")[0];
    chks[0] = row[0].getElementsByTagName("input");
    for (var i = 0; i < chks[0].length; i++) {
        chks[0][i].onclick = function () {
            for (var i = 0; i < chks[0].length; i++) {
                if (chks[0][i] != this && this.checked) {
                    chks[0][i].checked = false;
                }
            }
        };
    }


    row[1] = document.getElementsByClassName("questionrow")[1];
    chks[1] = row[1].getElementsByTagName("input");
    for (var i = 0; i < chks[1].length; i++) {
        chks[1][i].onclick = function () {
            for (var i = 0; i < chks[1].length; i++) {
                if (chks[1][i] != this && this.checked) {
                    chks[1][i].checked = false;
                }
            }
        };
    }


    row[2] = document.getElementsByClassName("questionrow")[2];
    chks[2] = row[2].getElementsByTagName("input");
    for (var i = 0; i < chks[2].length; i++) {
        chks[2][i].onclick = function () {
            for (var i = 0; i < chks[2].length; i++) {
                if (chks[2][i] != this && this.checked) {
                    chks[2][i].checked = false;
                }
            }
        };
    }


    row[3] = document.getElementsByClassName("questionrow")[3];
    chks[3] = row[3].getElementsByTagName("input");
    for (var i = 0; i < chks[3].length; i++) {
        chks[3][i].onclick = function () {
            for (var i = 0; i < chks[3].length; i++) {
                if (chks[3][i] != this && this.checked) {
                    chks[3][i].checked = false;
                }
            }
        };
    }


    row[4] = document.getElementsByClassName("questionrow")[4];
    chks[4] = row[4].getElementsByTagName("input");
    for (var i = 0; i < chks[4].length; i++) {
        chks[4][i].onclick = function () {
            for (var i = 0; i < chks[4].length; i++) {
                if (chks[4][i] != this && this.checked) {
                    chks[4][i].checked = false;
                }
            }
        };
    }


    row[5] = document.getElementsByClassName("questionrow")[5];
    chks[5] = row[5].getElementsByTagName("input");
    for (var i = 0; i < chks[5].length; i++) {
        chks[5][i].onclick = function () {
            for (var i = 0; i < chks[5].length; i++) {
                if (chks[5][i] != this && this.checked) {
                    chks[5][i].checked = false;
                }
            }
        };
    }


    row[6] = document.getElementsByClassName("questionrow")[6];
    chks[6] = row[6].getElementsByTagName("input");
    for (var i = 0; i < chks[6].length; i++) {
        chks[6][i].onclick = function () {
            for (var i = 0; i < chks[6].length; i++) {
                if (chks[6][i] != this && this.checked) {
                    chks[6][i].checked = false;
                }
            }
        };
    }


    row[7] = document.getElementsByClassName("questionrow")[7];
    chks[7] = row[7].getElementsByTagName("input");
    for (var i = 0; i < chks[7].length; i++) {
        chks[7][i].onclick = function () {
            for (var i = 0; i < chks[7].length; i++) {
                if (chks[7][i] != this && this.checked) {
                    chks[7][i].checked = false;
                }
            }
        };
    }


    row[8] = document.getElementsByClassName("questionrow")[8];
    chks[8] = row[8].getElementsByTagName("input");
    for (var i = 0; i < chks[8].length; i++) {
        chks[8][i].onclick = function () {
            for (var i = 0; i < chks[8].length; i++) {
                if (chks[8][i] != this && this.checked) {
                    chks[8][i].checked = false;
                }
            }
        };
    }


    row[9] = document.getElementsByClassName("questionrow")[9];
    chks[9] = row[9].getElementsByTagName("input");
    for (var i = 0; i < chks[9].length; i++) {
        chks[9][i].onclick = function () {
            for (var i = 0; i < chks[9].length; i++) {
                if (chks[9][i] != this && this.checked) {
                    chks[9][i].checked = false;
                }
            }
        };
    }


    row[10] = document.getElementsByClassName("questionrow")[10];
    chks[10] = row[10].getElementsByTagName("input");
    for (var i = 0; i < chks[10].length; i++) {
        chks[10][i].onclick = function () {
            for (var i = 0; i < chks[10].length; i++) {
                if (chks[10][i] != this && this.checked) {
                    chks[10][i].checked = false;
                }
            }
        };
    }


    row[11] = document.getElementsByClassName("questionrow")[11];
    chks[11] = row[11].getElementsByTagName("input");
    for (var i = 0; i < chks[11].length; i++) {
        chks[11][i].onclick = function () {
            for (var i = 0; i < chks[11].length; i++) {
                if (chks[11][i] != this && this.checked) {
                    chks[11][i].checked = false;
                }
            }
        };
    }


    row[12] = document.getElementsByClassName("questionrow")[12];
    chks[12] = row[12].getElementsByTagName("input");
    for (var i = 0; i < chks[12].length; i++) {
        chks[12][i].onclick = function () {
            for (var i = 0; i < chks[12].length; i++) {
                if (chks[12][i] != this && this.checked) {
                    chks[12][i].checked = false;
                }
            }
        };
    }


    row[13] = document.getElementsByClassName("questionrow")[13];
    chks[13] = row[13].getElementsByTagName("input");
    for (var i = 0; i < chks[13].length; i++) {
        chks[13][i].onclick = function () {
            for (var i = 0; i < chks[13].length; i++) {
                if (chks[13][i] != this && this.checked) {
                    chks[13][i].checked = false;
                }
            }
        };
    }


    row[14] = document.getElementsByClassName("questionrow")[14];
    chks[14] = row[14].getElementsByTagName("input");
    for (var i = 0; i < chks[14].length; i++) {
        chks[14][i].onclick = function () {
            for (var i = 0; i < chks[14].length; i++) {
                if (chks[14][i] != this && this.checked) {
                    chks[14][i].checked = false;
                }
            }
        };
    }


    row[15] = document.getElementsByClassName("questionrow")[15];
    chks[15] = row[15].getElementsByTagName("input");
    for (var i = 0; i < chks[15].length; i++) {
        chks[15][i].onclick = function () {
            for (var i = 0; i < chks[15].length; i++) {
                if (chks[15][i] != this && this.checked) {
                    chks[15][i].checked = false;
                }
            }
        };
    }


    row[16] = document.getElementsByClassName("questionrow")[16];
    chks[16] = row[16].getElementsByTagName("input");
    for (var i = 0; i < chks[16].length; i++) {
        chks[16][i].onclick = function () {
            for (var i = 0; i < chks[16].length; i++) {
                if (chks[16][i] != this && this.checked) {
                    chks[16][i].checked = false;
                }
            }
        };
    }


    row[17] = document.getElementsByClassName("questionrow")[17];
    chks[17] = row[17].getElementsByTagName("input");
    for (var i = 0; i < chks[17].length; i++) {
        chks[17][i].onclick = function () {
            for (var i = 0; i < chks[17].length; i++) {
                if (chks[17][i] != this && this.checked) {
                    chks[17][i].checked = false;
                }
            }
        };
    }


    row[18] = document.getElementsByClassName("questionrow")[18];
    chks[18] = row[18].getElementsByTagName("input");
    for (var i = 0; i < chks[18].length; i++) {
        chks[18][i].onclick = function () {
            for (var i = 0; i < chks[18].length; i++) {
                if (chks[18][i] != this && this.checked) {
                    chks[18][i].checked = false;
                }
            }
        };
    }


    row[19] = document.getElementsByClassName("questionrow")[19];
    chks[19] = row[19].getElementsByTagName("input");
    for (var i = 0; i < chks[19].length; i++) {
        chks[19][i].onclick = function () {
            for (var i = 0; i < chks[19].length; i++) {
                if (chks[19][i] != this && this.checked) {
                    chks[19][i].checked = false;
                }
            }
        };
    }


    row[20] = document.getElementsByClassName("questionrow")[20];
    chks[20] = row[20].getElementsByTagName("input");
    for (var i = 0; i < chks[20].length; i++) {
        chks[20][i].onclick = function () {
            for (var i = 0; i < chks[20].length; i++) {
                if (chks[20][i] != this && this.checked) {
                    chks[20][i].checked = false;
                }
            }
        };
    }


    row[21] = document.getElementsByClassName("questionrow")[21];
    chks[21] = row[21].getElementsByTagName("input");
    for (var i = 0; i < chks[21].length; i++) {
        chks[21][i].onclick = function () {
            for (var i = 0; i < chks[21].length; i++) {
                if (chks[21][i] != this && this.checked) {
                    chks[21][i].checked = false;
                }
            }
        };
    }


    row[22] = document.getElementsByClassName("questionrow")[22];
    chks[22] = row[22].getElementsByTagName("input");
    for (var i = 0; i < chks[22].length; i++) {
        chks[22][i].onclick = function () {
            for (var i = 0; i < chks[22].length; i++) {
                if (chks[22][i] != this && this.checked) {
                    chks[22][i].checked = false;
                }
            }
        };
    }


    row[23] = document.getElementsByClassName("questionrow")[23];
    chks[23] = row[23].getElementsByTagName("input");
    for (var i = 0; i < chks[23].length; i++) {
        chks[23][i].onclick = function () {
            for (var i = 0; i < chks[23].length; i++) {
                if (chks[23][i] != this && this.checked) {
                    chks[23][i].checked = false;
                }
            }
        };
    }


    row[24] = document.getElementsByClassName("questionrow")[24];
    chks[24] = row[24].getElementsByTagName("input");
    for (var i = 0; i < chks[24].length; i++) {
        chks[24][i].onclick = function () {
            for (var i = 0; i < chks[24].length; i++) {
                if (chks[24][i] != this && this.checked) {
                    chks[24][i].checked = false;
                }
            }
        };
    }


    row[25] = document.getElementsByClassName("questionrow")[25];
    chks[25] = row[25].getElementsByTagName("input");
    for (var i = 0; i < chks[25].length; i++) {
        chks[25][i].onclick = function () {
            for (var i = 0; i < chks[25].length; i++) {
                if (chks[25][i] != this && this.checked) {
                    chks[25][i].checked = false;
                }
            }
        };
    }


    row[26] = document.getElementsByClassName("questionrow")[26];
    chks[26] = row[26].getElementsByTagName("input");
    for (var i = 0; i < chks[26].length; i++) {
        chks[26][i].onclick = function () {
            for (var i = 0; i < chks[26].length; i++) {
                if (chks[26][i] != this && this.checked) {
                    chks[26][i].checked = false;
                }
            }
        };
    }


    row[27] = document.getElementsByClassName("questionrow")[27];
    chks[27] = row[27].getElementsByTagName("input");
    for (var i = 0; i < chks[27].length; i++) {
        chks[27][i].onclick = function () {
            for (var i = 0; i < chks[27].length; i++) {
                if (chks[27][i] != this && this.checked) {
                    chks[27][i].checked = false;
                }
            }
        };
    }


    row[28] = document.getElementsByClassName("questionrow")[28];
    chks[28] = row[28].getElementsByTagName("input");
    for (var i = 0; i < chks[28].length; i++) {
        chks[28][i].onclick = function () {
            for (var i = 0; i < chks[28].length; i++) {
                if (chks[28][i] != this && this.checked) {
                    chks[28][i].checked = false;
                }
            }
        };
    }


    row[29] = document.getElementsByClassName("questionrow")[29];
    chks[29] = row[29].getElementsByTagName("input");
    for (var i = 0; i < chks[29].length; i++) {
        chks[29][i].onclick = function () {
            for (var i = 0; i < chks[29].length; i++) {
                if (chks[29][i] != this && this.checked) {
                    chks[29][i].checked = false;
                }
            }
        };
    }


    row[30] = document.getElementsByClassName("questionrow")[30];
    chks[30] = row[30].getElementsByTagName("input");
    for (var i = 0; i < chks[30].length; i++) {
        chks[30][i].onclick = function () {
            for (var i = 0; i < chks[30].length; i++) {
                if (chks[30][i] != this && this.checked) {
                    chks[30][i].checked = false;
                }
            }
        };
    }


    row[31] = document.getElementsByClassName("questionrow")[31];
    chks[31] = row[31].getElementsByTagName("input");
    for (var i = 0; i < chks[31].length; i++) {
        chks[31][i].onclick = function () {
            for (var i = 0; i < chks[31].length; i++) {
                if (chks[31][i] != this && this.checked) {
                    chks[31][i].checked = false;
                }
            }
        };
    }


    row[32] = document.getElementsByClassName("questionrow")[32];
    chks[32] = row[32].getElementsByTagName("input");
    for (var i = 0; i < chks[32].length; i++) {
        chks[32][i].onclick = function () {
            for (var i = 0; i < chks[32].length; i++) {
                if (chks[32][i] != this && this.checked) {
                    chks[32][i].checked = false;
                }
            }
        };
    }

    // while(counter < 40)
    // {

    //     rows.push(document.getElementsByClassName("questionrow")[counter]);
    //     counter++;
    // }
    // var c =0;
    // while(c < 40) {
    //     chks[c] = rows[c].getElementsByTagName("input");
    //     for (var i = 0; i < chks[c].length; i++) {
    //         chks[c][i].onclick = function () {
    //             for (var i = 0; i < chks[c].length; i++) {
    //                 if (chks[c][i] != this && this.checked) {
    //                     chks[c][i].checked = false;
    //                 }
    //             }
    //         };
    //     }
    //     c++;
    // }
}
