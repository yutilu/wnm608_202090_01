let productLgImg = document.querySelector('.item_img_main');
let thumImg = document.querySelectorAll('.thum_img');
let thumImgSrc = [];
thumImg.forEach((el,index)=>{
	thumImgSrc.push(el.src);

	el.addEventListener("mouseover", ()=>{
		productLgImg.src=thumImgSrc[index];
	})
	
})

console.log(thumImgSrc);
