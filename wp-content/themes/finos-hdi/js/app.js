const content = document.querySelectorAll('.tab-content');
const tab_header_link = document.querySelectorAll('.tab-header-link');
const tab_header = document.querySelector('.tab-header');
function hideTabContent() {
    content.forEach(item => {
        item.style.display = 'none';
    });
    tab_header_link.forEach(item => {
        item.classList.remove('active');
    });
}

function showTabContent(i = 0) {
    content[i].style.display = 'flex';
    if(tab_header_link.length > 0)
        tab_header_link[i].classList.add('active');
}

hideTabContent();
showTabContent();

tab_header.addEventListener("click", (e) => {
    const target = e.target
    if (target) {
        tab_header_link.forEach((item, i) => {
            if (target == item || target.parentElement == item) {
                hideTabContent();
                showTabContent(i);
            }
        })
    }
})



//use for index page 3 only

const tab_content_2 = document.querySelectorAll('.tab-content-2');
const tab_header_link_2 = document.querySelectorAll('.tab-header-link-2');
const tab_header_2 = document.querySelector('.tab-header-2');
if(tab_content_2.length){

    hideTabContent2();
    showTabContent2();

    tab_header_2.addEventListener("click", (e) => {  
        const target = e.target
        if (target) {
            tab_header_link_2.forEach((item, i) => {
                if (target == item || target.parentElement == item) {
                    hideTabContent2();
                    showTabContent2(i);
                }
            })
        }
    })

}

function hideTabContent2() {
    tab_content_2.forEach(item => {
        item.style.display = 'none';
    });
    tab_header_link_2.forEach(item => {
        item.classList.remove('active');
    });
}

function showTabContent2(i = 0) {
    tab_content_2[i].style.display = 'block';
    tab_header_link_2[i].classList.add('active');
}

//end use for index page 3 only


//js for height in package section - index 4 page
//css not work, must using js

$(document).ready(function(){
    var mainPackage = $(".package-info-div-jquery-1" ).children('.package-info');
    var package1 = $(".package-info-div-jquery-2" ).children('.package-info');
    var package2 = $(".package-info-div-jquery-3" ).children('.package-info');
    var package3 = $(".package-info-div-jquery-4" ).children('.package-info');

    for(var i = 0; i < mainPackage.length; i++){
        var mainTitle = $(mainPackage[i]).children('.package-price');
        var titleHeight = $(mainTitle).height();
        var titleOuterHeight = $(mainTitle).outerHeight();
        var mainHeight = $(mainPackage[i]).height();

        if($(package1[i]).children('.check-img').length){//check section
            priceCheck1 = $(package1[i]).children('.check-img');
            $(priceCheck1[0]).css('margin-top', titleOuterHeight);
        } else {
            var price1 = $(package1[i]).children('.package-price');
            $(price1).height(titleHeight);
        }

        $(package1[i]).height(mainHeight);

        if($(package2[i]).children('.check-img').length){//check section
            priceCheck2 = $(package2[i]).children('.check-img');
            $(priceCheck2[0]).css('margin-top', titleOuterHeight);
        } else {
            var price2 = $(package2[i]).children('.package-price');
            $(price2).height(titleHeight);
        }

        $(package2[i]).height(mainHeight);

        if($(package3[i]).children('.check-img').length){//check section
            priceCheck3 = $(package3[i]).children('.check-img');
            $(priceCheck3[0]).css('margin-top', titleOuterHeight);
        } else {
            var price3 = $(package3[i]).children('.package-price');
            $(price3).height(titleHeight);
        }

        $(package3[i]).height(mainHeight);


        //css for li 
        var liList = $(mainPackage[i]).children('ul').children('li');
        var pPrice1 = $(package1[i]).children('.price-detail').children('p');
        var imgPrice1 = $(package1[i]).children('.check-img');

        var price2 = $(package1[i]).children('.price-detail').children('p');
        var imgPrice2 = $(package2[i]).children('.check-img');

        var price3 = $(package1[i]).children('.price-detail').children('p');
        var imgPrice3 = $(package3[i]).children('.check-img');

        console.log(imgPrice2);
        
        for (var j = 0; j < liList.length; j++){
            var liHeight = $(liList[j]).height();
            $(pPrice1[j]).height(liHeight);

            if(imgPrice1.length){
                $(imgPrice1[j]).height(liHeight);
            }

            if(imgPrice2.length){
                $(imgPrice2[j]).height(liHeight);
            }

            if(imgPrice3.length){
                $(imgPrice3[j]).height(liHeight);
            }
        }

        

    }
    
});

//js for height in package section - index 4 page


