class Table {
    constructor(title_info) {
        const $table = $("<table>");
        const $thead = $("<thead>");
        $table.append($thead);
    }
  
    // 메서드
    sayHi() {
      console.log(`안녕하세요, 저는 ${this.name}입니다.`);
    }
  }