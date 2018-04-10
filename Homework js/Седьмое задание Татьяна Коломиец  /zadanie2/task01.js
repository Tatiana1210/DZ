
// Подключить стороннюю библиотеку для юнит тестирования.
// Написать несколько тестов для функции, рассчитывающей y = 1/x + sqrt(x).

function calc(x){
    var e=((1/x) + (Math.sqrt(x)))
    return e;
    }

describe("cheak calc e=f(x)", function(){
  it ("positive", function() {
    var rez=calc(1);
    expect(rez).toBe(2);
  });

    it("negative", function(){
        var rez = calc(0);
        expect(rez).toBe(Infinity);
    });
});
