;(function() {
  window.myfirstLib={
    remove: function(arr,index){
      arr.splice(index,1);
      return arr;
    },
    repeat: function(str,count) {
      var result='';
      for (var i=0;i<count;i++)
         result+=str;
      return result;
    },
    pluck:function(arr,nameProp) {
      var result=[];
      for(var i=0;i<arr.length;i++) {
        if (arr[i] instanceof Object &&
           arr[i][nameProp]!==undefined)
        result.push (arr[i][nameProp]);
      return result;
      }
  };
}();
