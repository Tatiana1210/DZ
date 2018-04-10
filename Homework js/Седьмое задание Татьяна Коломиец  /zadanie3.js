
  //  Написать свою подключаемую js библиотеку для работы с массивом, хранящим целые числа.
  // Библиотека должна обладать следующими методами:
  // - поиск минимального элемента в переданном массиве;
  // - поиск максимально элемента в переданном массиве;
  // - расчет среднего арифметического значения элементов переданного массива;
  // - создание копии (клонирование) переданного массива.
  ;(function() {
    window.zadanie3={
      min: function(arr) {
      var min=arr[0];
        for (let i=1; i<arr.length;i++) {
           if (min>arr[i]) {
             min=arr[i];
           }
         }
        return min;
      },
    max: function(arr) {
    var max = arr[0];
    for (let i= 1; i < arr.length; i++) {
    if (max < arr[i]) {
    max = arr[i]; }
}
   return max;
    },
      average:function(arr) {
          var sum=0
          for (let i = 0; i<arr.length; i++ ) {
          sum += arr[i];
        }
          if (sum===0) {
           return sum;}
          else {
           var result=sum/arr.length;
           return (result);
          }

      },
        clon:function(arr) {
        arrcop=arr.slice(0);
        return arrcop;
        }
    }
  }());
