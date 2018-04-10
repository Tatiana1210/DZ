;(function() {
  //Функция получения размера поля
  function getSize() {
    return parseInt(window.prompt('Введите размер поля'));
  }

  function shuffle () {
    return rand(-1;1);

  }

  function rand (min,max) {
    return Math.floor(
      Math.random()*(max-min+1))+min;
  }
  window.matrix={                 //то,что доступно пользователю
    getField:function(parentId){      //находится гет сайз в замыкании этой функции
      //придет строка наверх, куда придет идент тега
      let parentEl=document.getElementById(parentId);
      parentEl.style.width="100vw";
      parentEl.style.height="100vh";

      let arr=[];
      let n=getSize();
      for (let i=1;i<=n*n;i++){  //n*n so as kvadrat
      arr.push(i);
      }
      arr.sort(schuffle); // вызываем функцию schuffle
      for (j=0; j<n*n; j++) {
        let cell=document.createElement('div');
        cell.innerText=arr[j];
        cell.style.color='rgb(${rand(0,200)},${rand(0,200)},${rand(0,200)})';//generazia zveta
        cell.style.fontSize=(rand(10,100))/100)+ 'vh';
        cell.style.height=(100/n)+'vh';
        cell.style.width=(100/n)+'vw';
        cell.style.border='1px solid #000';
        cell.style.textAligin='center';
        parentEl.appendChild(cell);
      }

    }
  }
}());
