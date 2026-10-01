<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Choice;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // 1問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonでコメントを書く記号は？',
            'explanation' => '# を使うことでコメントを書ける。コメントはプログラムの動作に影響しない。'
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '#',
            'is_correct' => true, 
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '//',
            'is_correct' => false, 
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '<!-- -->',
            'is_correct' => false, 
        ]);

        // 2問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'ユーザーからキーボード入力を受け取るために使用する関数は？',
            'explanation' => 'input() は、ユーザーがキーボードから入力した値を受け取るための関数。入力された値は文字列として返される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'input()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'print()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'return',
            'is_correct' => false,
        ]);


        // 3問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで値を保存するために使用するものはどれか？',
            'explanation' => '変数は、文字列や数値などのデータを保存するために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コメント',
            'is_correct' => false,
        ]);


        // 4問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで文字列を表すデータ型はどれか？',
            'explanation' => 'str は文字列(String)を表すデータ型。intは整数、boolは真偽値を表す。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'int',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'str',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'bool',
            'is_correct' => false,
        ]);


        // 5問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        age = 20

        print(age)",
            'explanation' => 'print(age) は変数 age に保存されている値を表示するため、20が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '20',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'age',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 6問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで「等しい」ことを比較する演算子はどれか？',
            'explanation' => '== は値が等しいか比較する演算子。= は代入に使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '=',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '==',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '!=',
            'is_correct' => false,
        ]);


        // 7問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで条件分岐を行うために使用する文はどれか？',
            'explanation' => 'if文は条件によって処理を分岐させるために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'for',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'if',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'while',
            'is_correct' => false,
        ]);


        // 8問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 10

        if x > 5:
            print(\"OK\")",
            'explanation' => '10 > 5 はTrueなので、if文の中が実行されOKが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '10',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);


        // 9問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 3

        if x > 5:
            print(\"OK\")",
            'explanation' => '3 > 5 はFalseなので、if文の中は実行されず何も表示されない。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => true,
        ]);


        // 10問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 5

        if x == 5:
            print(\"A\")
        else:
            print(\"B\")",
            'explanation' => 'x == 5 はTrueなので、if側が実行されAが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        // 11問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 5

        if x != 5:
            print(\"A\")
        else:
            print(\"B\")",
            'explanation' => '!= は「等しくない」という意味。x は5なので条件はFalseになり、elseが実行されBが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);


        // 12問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 7

        if x > 5 and x < 10:
            print(\"OK\")
        else:
            print(\"NG\")",
            'explanation' => 'xは7なので、5より大きく10より小さい条件を両方満たす。andは両方Trueの場合にTrueになるためOKが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NG',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);


        // 13問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 5

        if x >= 5:
            print(\"A\")
        else:
            print(\"B\")",
            'explanation' => '>= は「以上」を意味する。xは5なので条件を満たしAが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);


        // 14問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => "次のコードを実行した結果として正しいものはどれか？

        x = 6

        if x > 3 and x % 2 == 0:
            print(\"A\")
        else:
            print(\"B\")",
            'explanation' => '6は3より大きく、2で割った余りも0なので条件はTrue。Aが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 15問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで「何かの処理をまとめて実行できるもの」はどれか？',
            'explanation' => '関数は処理をひとまとまりにして再利用できる仕組み。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コメント',
            'is_correct' => false,
        ]);


        // 16問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonでコードのブロックを表すために使われるものはどれか？',
            'explanation' => 'Pythonではインデントによって処理のまとまりを表す。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'カンマ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'インデント',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コメント',
            'is_correct' => false,
        ]);


        // 17問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => '次のうち「リテラル」として正しいものはどれか？',
            'explanation' => 'リテラルとはプログラム中に直接書かれた値のこと。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数名',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '10 や "Hello"',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'if文',
            'is_correct' => false,
        ]);


        // 18問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => '関数に渡す値のことを何と呼ぶか？',
            'explanation' => '関数に渡す入力データを引数と呼ぶ。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '引数',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '戻り値',
            'is_correct' => false,
        ]);


        // 19問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => '関数が処理の結果として返す値を何と呼ぶか？',
            'explanation' => 'returnで返される値を戻り値と呼ぶ。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '出力',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '戻り値',
            'is_correct' => true,
        ]);


        // 20問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => '変数が使える範囲のことを何と呼ぶか？',
            'explanation' => 'スコープとは変数が有効な範囲のこと。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'レンジ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ブロック',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'スコープ',
            'is_correct' => true,
        ]);

        // 21問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => '問題を解くための手順や方法のことを何と呼ぶか？',
            'explanation' => 'アルゴリズムとは、問題を解決するための手順や処理の流れのこと。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '解法',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アルゴリズム',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'メソッド',
            'is_correct' => false,
        ]);


        // 22問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 'Pythonで、エラーが発生する可能性のある処理を扱うときに使用する構文はどれか？',
            'explanation' => 'try / exceptを使うと、エラーが発生した場合の処理を記述できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'try / except',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'if / else',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'for / in',
            'is_correct' => false,
        ]);


        // 23問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' => 
        "次のコードを実行した結果として正しいものはどれか？

        x = 3

        if x < 5 or x > 10:
            print(\"OK\")
        else:
            print(\"NG\")",
            'explanation' => 'x < 5はTrue、x > 10はFalse。orはどちらか一方がTrueならTrueになるため、OKが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NG',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 24問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        def hello():
            print(\"Hello\")

        hello()",
            'explanation' => 'defで関数を定義し、hello()を呼び出すことで関数内の処理が実行される。そのためHelloが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Hello',
            'is_correct' => true,
        ]);


        // 25問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        def add(a, b):
            return a + b

        result = add(2, 3)
        print(result)",
            'explanation' => 'add(2, 3)では2+3が計算され、returnによって5が返される。そのため5が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '5',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '23',
            'is_correct' => false,
        ]);

        Choice::create([
        'question_id' => $question->id,
        'choice_text' => 'エラーになる',
        'is_correct' => false,
        ]);

        // 26問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
            "次のコードを実行した結果として正しいものはどれか？

        def check(num):
            if num % 2 == 0:
                return \"A\"
            else:
                return \"B\"

        print(check(3))",
            'explanation' => '3 % 2 は1なので条件はFalseになる。そのためelseが実行され、Bが返される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 27問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        fruits = [\"りんご\", \"みかん\", \"ぶどう\"]

        print(fruits[1])",
            'explanation' => 'リストのインデックスは0から始まる。fruits[1]は2番目の要素である「みかん」を取得する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'りんご',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'みかん',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ぶどう',
            'is_correct' => false,
        ]);


        // 28問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        fruits = [\"りんご\", \"みかん\", \"ぶどう\"]

        print(len(fruits))",
            'explanation' => 'len()はリストの要素数を取得する関数。fruitsには3つの要素があるため3になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '4',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => true,
        ]);


        // 29問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [10, 20, 30]

        print(numbers[len(numbers) - 1])",
            'explanation' => 'len(numbers)は3。3-1で2となり、numbers[2]は30を取得する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '10',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '20',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '30',
            'is_correct' => true,
        ]);


        // 30問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1, 2]

        numbers.append(3)

        print(numbers[2])",
            'explanation' => 'append()で3が追加され、リストは[1,2,3]になる。numbers[2]は3を指す。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        // 31問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1, 2, 3, 4]

        result = []

        for num in numbers:
            if num % 2 == 0:
                result.append(num)

        print(result)",
            'explanation' => '偶数だけがresultに追加されるため、結果は[2, 4]になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 3]',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[2, 4]',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 2, 3, 4]',
            'is_correct' => false,
        ]);


        // 32問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        for i in range(5):
            if i == 2:
                continue
            if i == 4:
                break
            print(i)",
                'explanation' => 'iが2の時はcontinueでスキップされ、iが4の時はbreakで終了する。そのため0,1,3が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0 1 3',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0 1 2 3',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0 1 3 4',
            'is_correct' => false,
        ]);


        // 33問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        total = 0

        for i in range(1, 6):
            total += i
            if total >= 6:
                break

        print(total)",
            'explanation' => '1+2+3でtotalは6になる。その時点でbreakされるため結果は6。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '6',
        'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '10',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '15',
            'is_correct' => false,
        ]);


        // 34問目
            $question = Question::create([
            'category_id' => 1,
            'question_text' =>
            "次のコードを実行した結果として正しいものはどれか？

        numbers = [3, 6, 9, 12]
        result = []

        for num in numbers:
            if num > 5:
                result.append(num)

        print(len(result))",
        'explanation' => '5より大きい6,9,12の3つが追加されるためlen(result)は3。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '4',
            'is_correct' => false,
        ]);


        // 35問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1, 2, 3, 4, 5]
        result = []

        for num in numbers:
            if num % 2 == 0:
                continue
            result.append(num)

        print(result)",
            'explanation' => '偶数はcontinueでスキップされ、奇数だけが追加されるため[1,3,5]。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[2, 4]',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 3, 5]',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 2, 3, 4, 5]',
            'is_correct' => false,
        ]);


        // 36問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行するとエラーになる。
        原因として正しいものはどれか？

        numbers = [10, 20, 30]

        print(number[0])",
        'explanation' => '作成したリスト名はnumbersだが、printではnumberを使用しているためNameErrorになる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数名が一致していないため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リストは表示できないため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'インデックスは1から始まるため',
            'is_correct' => false,
        ]);


        // 37問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行するとエラーになる。
        原因として正しいものはどれか？

        x = 10

        if x = 10:
            print(\"OK\")",
            'explanation' => '=は代入、==は比較に使用するためif文では==を使う必要がある。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '=ではなく==を使う必要があるため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'printはif文で使えないため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'xには数字を入れられないため',
            'is_correct' => false,
        ]);


        // 38問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1,2]

        numbers.append(3)
        numbers.append(4)

        print(numbers[2] + numbers[3])",
            'explanation' => 'numbers[2]は3、numbers[3]は4なので3+4で7。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '5',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '7',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 39問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        scores = [72,85,60,91]
        count = 0

        for score in scores:
            if score >= 80:
                count += 1

        print(count)",
            'explanation' => '80以上の点数は85と91の2つなのでcountは2になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '4',
            'is_correct' => false,
        ]);


        // 40問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [2,5,8,1]

        for num in numbers:
            if num > 6:
                print(num)
                break",
            'explanation' => '2と5は条件を満たさず、8でprintされbreakするため8が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '5',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '8',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1',
            'is_correct' => false,
        ]);

        // 41問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行するとエラーになる。
        原因として正しいものはどれか？

        x = \"10\"

        print(x + 5)",
            'explanation' => 'x は文字列"10"として保存されている。文字列と整数はそのまま足し算できないので、TypeErrorが発生する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '15',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '105',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'TypeErrorが発生する',
            'is_correct' => true,
        ]);


        // 42問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        x = 0

        if x:
            print(\"A\")
        else:
            print(\"B\")",
            'explanation' => 'Pythonでは0はFalseとして扱われる。条件式がFalseになるためelseが実行され、Bが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'A',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'B',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        // 43問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1, 2, 3]

        numbers[1] = 10

        print(numbers)",
            'explanation' => 'リストはインデックスを指定して値を変更できる。numbers[1]は2番目の要素なので2 が 10 に置き換わる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 2, 10]',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[1, 10, 3]',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[10, 2, 3]',
            'is_correct' => false,
        ]);


        // 44問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        count = 0

        while count < 3:
            print(count)
            count += 1",
            'explanation' => 'whileは条件がTrueの間繰り返す。countは0→1→2と変化し、3になると条件がFalseになる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1, 2, 3',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0, 1, 2',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0, 1, 2, 3',
            'is_correct' => false,
        ]);


        // 45問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        user = {
            \"name\": \"Taro\",
            \"age\": 20
        }
            
        print(user[\"name\"])",
            'explanation' => '辞書はキーと値をセットで管理する。user["name"]でnameに対応する値を取得する。そのためTaroが表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Taro',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'name',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '20',
            'is_correct' => false,
        ]);


        // 46問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行するとエラーになる。
        原因として正しいものはどれか？

        fruits = [\"りんご\", \"みかん\", \"ぶどう\"]

        print(fruits[3])",
            'explanation' => 'リストのインデックスは0から始まる。fruitsには0,1,2しか存在しないためfruits[3]はIndexErrorになる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'インデックスは1から始まるため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'fruits[3]は存在しない要素を指定しているため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '文字列はリストに保存できないため',
            'is_correct' => false,
        ]);


        // 47問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "Pythonで、文字列をすべて大文字に変換するメソッドはどれか？",
            'explanation' => 'upper()を使うと、文字列をすべて大文字に変換できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'big()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'upper()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'replace()',
            'is_correct' => false,
        ]);


        // 48問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [4,7,2,9]
        result = []

        for num in numbers:
            if num < 5:
                result.append(num)

        print(len(result))",
            'explanation' => '5未満の4と2が追加されるためresultは[4,2]になる。要素数は2。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '4',
            'is_correct' => false,
        ]);


        // 49問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [1,2,3,4,5]
        result = []

        for num in numbers:
            if num % 2 == 0:
                resuult.append(num)

        print(len(result))
        print(result)",
            'explanation' => '※このコードはresuultという存在しない変数を使用しているためエラーになる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '2 [2,4]',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '[2,4] 2',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => true,
        ]);


        // 50問目
        $question = Question::create([
            'category_id' => 1,
            'question_text' =>
        "次のコードを実行した結果として正しいものはどれか？

        numbers = [10, 20, 30]

        total = sum(numbers)

        print(total)",
            'explanation' => 'sum() は、リストなどの数値を合計する関数。このコードでは 10 + 20 + 30 が計算されるため、結果は 60 になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '30',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '60',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => false,
        ]);

        //PHP1問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPのプログラムを開始するときに最初に書くタグはどれか？',
            'explanation' => 'PHPのコードは通常 <?php から始める。<? は環境によっては使用できないため、<?php を使うのが基本。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '<?php',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '<php>',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '<?',
            'is_correct' => false,
        ]);

        //PHP2問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPで、文字列や変数の内容を画面に表示するときに使用するものはどれか？',
            'explanation' => 'echo は文字列や変数の内容を画面へ表示するために使用する。PHPで最もよく使われる手法の一つ。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'echo',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'display()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'input()',
            'is_correct' => false,
        ]);
        
        //PHP3問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPで変数を表すときに先頭へ付ける記号はどれか？',
            'explanation' => 'PHPでは変数名の先頭に $ を付ける。例えば $name や $age のように記述する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '$',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '#',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '@',
            'is_correct' => false,
        ]);

        //PHP4問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？
        
        <?php
        
        \$name = \"Taro\";
        
        echo \$name;",
            'explanation' => 'echo $name; は変数 $name に保存されている値を表示するため、「Taro」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Taro',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '$name',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP5問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？
        
        <?php
        
        \$x = 10;
        
        echo \$x + 5;",
            'explanation' => '$x は整数の10なので、10 + 5 が計算され、15が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '105',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '15',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP6問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPで文字列を連結するときに使用する演算子はどれか？',
            'explanation' => 'PHPでは .（ドット）を使って文字列を連結する。+ は数値の計算に使用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '.',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '+',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '&',
            'is_correct' => false,
        ]);

        //PHP7問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$name = \"PHP\";

        echo \"Hello \" . \$name;",
            'explanation' => 'PHPでは .（ドット）を使って文字列を連結する。.（ドット）がスペースを追加しているわけではなく、「Hello 」の最後にもともと半角スペースが含まれているため、「Hello PHP」と表示される。もし「Hello」の後ろにスペースがなければ、「HelloPHP」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Hello PHP',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'HelloPHP',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'PHP Hello',
            'is_correct' => false,
        ]);

        //PHP8問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPで条件分岐を行うときに使用する文はどれか？',
            'explanation' => 'if文は条件によって処理を分岐させるために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'if',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'for',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'echo',
            'is_correct' => false,
        ]);

        //PHP9問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$age = 20;

        if (\$age >= 18) {
            echo \"大人\";
        }",
            'explanation' => '$ageは20なので条件が真となり、「大人」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '大人',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '子ども',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        //PHP10問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '配列の要素数を取得する関数はどれか？',
            'explanation' => 'count()は配列に含まれる要素数を取得する関数。',

        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'count()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'length()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'size()',
            'is_correct' => false,
        ]);

        //PHP11問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$numbers = [10, 20, 30];

        echo count(\$numbers);",
            'explanation' => 'count()は配列の要素数を取得する関数。配列には3つの要素があるため、3が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '30',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP12問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '配列の要素を1つずつ取り出すときによく使用する文はどれか？',
            'explanation' => 'foreach文は、配列の要素を先頭から順番に取り出して処理するときによく使用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'foreach',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'switch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'echo',
            'is_correct' => false,
        ]);

        //PHP13問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$colors = [\"赤\", \"青\", \"黄\"];

        foreach (\$colors as \$color) {
            echo \$color;
        }",
            'explanation' => 'foreach文は配列の要素を順番に取り出す。3つの要素がそのまま続けて表示されるため、「赤青黄」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '赤青黄',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '赤',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '黄青赤',
            'is_correct' => false,
        ]);

        //PHP14問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'PHPで関数を定義するときに使用するキーワードはどれか？',
            'explanation' => 'PHPではfunctionを使って関数を定義する。関数を作ることで、同じ処理を何度でも呼び出せる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'function',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'func',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'method',
            'is_correct' => false,
        ]);

        //PHP15問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        function greet() {
            return \"こんにちは\";
        }

        echo greet();",
            'explanation' => 'greet()を呼び出すとreturnで返された「こんにちは」がechoによって表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'こんにちは',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'greet',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        //PHP16問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '文字列の長さを取得する関数はどれか？',
            'explanation' => 'strlen()は文字列の文字数を取得する関数。例えば「PHP」の文字数は3になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'strlen()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'count()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'length()',
            'is_correct' => false,
        ]);

        //PHP17問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$text = \"Laravel\";

        echo strlen(\$text);",
            'explanation' => 'strlen()は文字列の長さを取得する関数。「Laravel」は7文字なので、7が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '8',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '7',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '9',
            'is_correct' => false,
        ]);

        //PHP18問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'データ型を区別せずに値が等しいかどうかを比較する演算子はどれか？',
            'explanation' => '==は値が等しいかどうかを比較する演算子。データ型が異なっていても、値が等しければ等しいと判断する。=は値を代入するときに使用し、===は値とデータ型の両方を比較する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '==',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '=',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '===',
            'is_correct' => false,
        ]);

        //PHP19問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '値とデータ型の両方が等しいかどうかを比較する演算子はどれか？',
            'explanation' => '===は値だけでなく、データ型も含めて比較する演算子。例えば、数値の10と文字列の"10"は==では等しいが、===では等しくない。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '===',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '==',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '=',
            'is_correct' => false,
        ]);

        //PHP20問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$x = 10;

        if (\$x == \"10\") {
            echo \"OK\";
        }",
            'explanation' => '==は値を比較する演算子であり、データ型が異なっていても値が同じなら等しいと判断する。そのため「OK」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP21問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '変数が定義されていて、nullではないかを確認する変数はどれか？',
            'explanation' => 'isset()は変数が定義されており、なおかつnullでないかを確認する関数。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'isset()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'empty()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'count()',
            'is_correct' => false,
        ]);

        //PHP22問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$name = \"Taro\";

        if (isset(\$name)) {
            echo \"OK\";
        }",
            'explanation' => '$nameには「Taro」が代入されているため、isset()はtrueとなり「OK」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP23問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '値が空かどうかを確認する関数はどれか？',
            'explanation' => 'empty()は変数が空かどうかを確認する関数。空文字や0、nullなども「空」と判断される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'empty()',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'isset()',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'strlen()',
            'is_correct' => false,
        ]);

        //PHP24問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$text = \"\";

        if (empty(\$text)) {
            echo \"空です\";
        }",
            'explanation' => '$textは空文字列なのでempty()はtrueとなり、「空です」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '空です',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP25問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$x = 10;
        \$y = \"10\";

        if (\$x === \$y) {
            echo \"OK\";
        } else {
            echo \"NG\";
        }",
            'explanation' => '===は値だけでなくデータ型も比較する。$xは整数、$yは文字列なので等しくなく、「NG」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OK',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NG',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP26問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '別のPHPファイルを読み込むために使用する命令はどれか？',
            'explanation' => 'includeは別のPHPファイルを読み込む命令。同じ内容を複数のファイルで使い回したいときによく使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'include',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'import',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'using',
            'is_correct' => false,
        ]);

        //PHP27問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '別のPHPファイルを読み込み、読み込みに失敗した場合は処理を停止する命令はどれか？',
            'explanation' => 'requireは別のPHPファイルを読み込む命令。読み込みに失敗すると致命的なエラーとなり、プログラムの実行が停止する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'require',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'include',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'import',
            'is_correct' => false,
        ]);

        //PHP28問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$score = 80;

        if (\$score >= 70) {
            echo \"合格\";
        } else {
            echo \"不合格\";
        }",
            'explanation' => '$scoreは80なので条件が真となり、「合格」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '合格',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '不合格',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);

        //PHP29問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'for文は主にどのような場面で使用されるか？',
            'explanation' => 'for文は、同じ処理を決まった回数だけ繰り返したいときによく使用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '決まった回数だけ処理を繰り返したいとき',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '文字列を画面に表示したいとき',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数を定義したいとき',
            'is_correct' => false,
        ]);

        //PHP30問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        for (\$i = 1; \$i <= 3; \$i++) {
            echo \$i;
        }",
            'explanation' => 'for文は条件を満たす間、処理を繰り返す。このコードでは1から3まで順番に表示されるため、「123」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '321',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '13',
            'is_correct' => false,
        ]);

        //PHP31問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        for (\$i = 0; \$i < 3; \$i++) {
            echo \$i;
        }",
            'explanation' => '$iは0から始まり、3未満の間だけ繰り返されるため、「012」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '012',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0123',
            'is_correct' => false,
        ]);

        //PHP32問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$sum = 0;

        for (\$i = 1; \$i <= 3; \$i++) {
            \$sum += \$i;
        }

        echo \$sum;",
            'explanation' => '$sumは0から始まり、1、2、3を順番に足していくため、6が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '6',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '3',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => false,
        ]);

        //PHP33問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'foreach ($fruits as $fruit) の $fruit が表しているものはどれか？',
            'explanation' => '$fruitには、配列$fruitsから取り出した要素が1つずつ入る。foreach文では、この変数を使って各要素を順番に処理する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '配列から1つずつ取り出した要素',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '配列全体',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'foreach文の名前',
            'is_correct' => false,
        ]);

        //PHP34問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$fruits = [\"りんご\", \"みかん\"];

        foreach (\$fruits as \$fruit) {
            echo \$fruit;
        }",
            'explanation' => 'foreach文では、配列の要素を先頭から1つずつ取り出す。このコードでは「りんご」「みかん」の順に表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'りんごみかん',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'みかんりんご',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'りんご',
            'is_correct' => false,
        ]);

        //PHP35問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$numbers = [1, 2, 3];

        foreach (\$numbers as \$number) {
            echo \$number * 2;
        }",
            'explanation' => '配列から取り出した各要素を2倍して順番に表示するため、「246」が表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '246',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '612',
            'is_correct' => false,
        ]);

        //PHP36問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '複数の条件によって処理を分けるときに使用できる文はどれか？',
            'explanation' => 'switch文は、1つの値を複数の条件と比較して処理を分けるときに使用する。caseごとに処理を記述できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'switch',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'echo',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'include',
            'is_correct' => false,
        ]);


        //PHP37問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$color = \"red\";

        switch (\$color) {
            case \"blue\":
                echo \"青\";
                break;

            case \"red\":
                echo \"赤\";
                break;

            default:
                echo \"その他\";
        }",
            'explanation' => '$colorにはredが入っているため、case "red"の処理が実行され「赤」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '赤',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '青',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'その他',
            'is_correct' => false,
        ]);


        //PHP38問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '条件がtrueの間、繰り返し処理を行う文はどれか？',
            'explanation' => 'while文は、指定した条件がtrueである間、処理を繰り返すために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'while',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'switch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'return',
            'is_correct' => false,
        ]);


        //PHP39問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$i = 1;

        while (\$i <= 3) {
            echo \$i;
            \$i++;
        }",
            'explanation' => '$iは1から始まり、3以下の間繰り返されるため「123」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '012',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1234',
            'is_correct' => false,
        ]);


        //PHP40問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'ループ処理を途中で終了するときに使用するものはどれか？',
            'explanation' => 'breakは、for文やwhile文などの繰り返し処理を途中で終了するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'break',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'continue',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'stop',
            'is_correct' => false,
        ]);

         //PHP41問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$i = 1;

        while (\$i <= 5) {
            if (\$i == 3) {
                break;
            }

            echo \$i;
            \$i++;
        }",
            'explanation' => '1、2を表示した後、$iが3になった時点でbreakが実行され、ループが終了するため「12」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '12',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '12345',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '123',
            'is_correct' => false,
        ]);


        //PHP42問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '定義した関数を実行するときに必要な記述はどれか？',
            'explanation' => 'PHPでは関数名の後ろに()を付けることで関数を呼び出せる。例えばhello();のように記述する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数名の後ろに()を付ける',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数名の前に$を付ける',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '関数名の前に#を付ける',
            'is_correct' => false,
        ]);


        //PHP43問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        function hello() {
            echo \"Hello\";
        }

        hello();",
            'explanation' => 'hello()関数を呼び出すことで、関数内のechoが実行され「Hello」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Hello',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'hello',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '何も表示されない',
            'is_correct' => false,
        ]);


        //PHP44問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '関数へ値を渡すために使用するものはどれか？',
            'explanation' => '関数に渡す値を引数という。引数を使うことで、同じ処理でも異なる値を扱える。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '引数',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '戻り値',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変数',
            'is_correct' => false,
        ]);


        //PHP45問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        function greet(\$name) {
            echo \"こんにちは\" . \$name;
        }

        greet(\"太郎\");",
            'explanation' => 'greet関数に「太郎」という値を渡しているため、「こんにちは太郎」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'こんにちは太郎',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'こんにちは$name',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);

        //PHP46問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        '関数の処理結果を呼び出し元へ返すときに使用するものはどれか？',
            'explanation' => 'returnは関数内で処理した値を呼び出し元へ返すために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'return',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'echo',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'break',
            'is_correct' => false,
        ]);


        //PHP47問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        function add(\$a, \$b) {
            return \$a + \$b;
        }

        \$result = add(3, 5);

        echo \$result;",
            'explanation' => 'add関数では3と5を足した結果をreturnしているため、$resultには8が入り表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '8',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '35',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);


        //PHP48問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        'キーと値をセットで管理できる配列はどれか？',
            'explanation' => '連想配列はキーと値をセットで管理できる配列。例えば"name" => "Taro"のようにデータを保存できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '連想配列',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '通常の配列',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '定数',
            'is_correct' => false,
        ]);


        //PHP49問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        \$user = [
            \"name\" => \"Taro\",
            \"age\" => 20
        ];

        echo \$user[\"name\"];",
            'explanation' => '連想配列ではキーを指定して値を取得できる。nameに対応する値はTaroなので「Taro」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Taro',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'name',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '20',
            'is_correct' => false,
        ]);


        //PHP50問目
        $question = Question::create([
            'category_id' => 2,
            'question_text' =>
        "実行結果として正しいものはどれか？

        <?php

        function test(\$x) {
            \$x = \$x + 10;
            return \$x;
        }

        \$num = 5;

        echo test(\$num);

        echo \$num;",
            'explanation' => '関数に渡した値は別の変数として扱われる。test関数では15が返されるが、元の$numは5のままなので「155」と表示される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '155',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1515',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'エラーになる',
            'is_correct' => false,
        ]);
        
        //SQL1問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLでデータを取得するときに使用する命令はどれか？',
            'explanation' =>
                'SELECTはデータベースのテーブルからデータを取得するときに使用するSQL文。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'INSERT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SELECT',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UPDATE',
            'is_correct' => false,
        ]);


        //SQL2問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで新しいデータを追加するときに使用する命令はどれか？',
            'explanation' =>
                'INSERTはテーブルに新しいレコードを追加するときに使用するSQL文。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DELETE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SELECT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'INSERT',
            'is_correct' => true,
        ]);


        //SQL3問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで既存のデータを更新するときに使用する命令はどれか？',
            'explanation' =>
                'UPDATEは既存のレコードの内容を変更するときに使用するSQL文。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UPDATE',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DROP',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CREATE',
            'is_correct' => false,
        ]);


        //SQL4問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLでデータを削除するときに使用する命令はどれか？',
            'explanation' =>
                'DELETEはテーブル内のレコードを削除するときに使用するSQL文。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CLEAR',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'REMOVE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DELETE',
            'is_correct' => true,
        ]);


        //SQL5問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで条件を指定してデータを絞り込むために使用する句はどれか？',
            'explanation' =>
                'WHERE句を使うことで、条件に一致するデータだけを取得できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ORDER BY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GROUP BY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'WHERE',
            'is_correct' => true,
        ]);
        
                //SQL6問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'テーブル内のすべての列を取得するときに使用する記号はどれか？',
            'explanation' =>
                '*（アスタリスク）は、テーブル内のすべての列を取得するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '#',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '*',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '&',
            'is_correct' => false,
        ]);


        //SQL7問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで取得する列を「name」だけにしたいとき、SELECTの後に書くものはどれか？',
            'explanation' =>
                'SELECTの後には取得したい列名を書く。nameだけ取得する場合はSELECT nameとなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'name',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'table',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'column',
            'is_correct' => false,
        ]);


        //SQL8問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLでデータを並び替えるときに使用する句はどれか？',
            'explanation' =>
                'ORDER BY句を使用すると、指定した列を基準に昇順・降順で並び替えられる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GROUP BY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ORDER BY',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'WHERE',
            'is_correct' => false,
        ]);


        //SQL9問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで重複したデータを除いて取得するときに使用するキーワードはどれか？',
            'explanation' =>
                'DISTINCTを使うと、重複した値を除いて結果を取得できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UNIQUE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DISTINCT',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DUPLICATE',
            'is_correct' => false,
        ]);


        //SQL10問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで取得する件数を制限するときに使用するキーワードはどれか？',
            'explanation' =>
                'LIMITを使うと、取得する件数を制限できる。（MySQLで使用）',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COUNT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'TOP',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'LIMIT',
            'is_correct' => true,
        ]);
        
        //SQL11問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで指定した列のデータ数を数えるときに使用する集計関数はどれか？',
            'explanation' =>
                'COUNTは、指定した列のデータ数を数えるために使用する集計関数。COUNT(*)を使うと行数を数えられる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SUM',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COUNT',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'AVG',
            'is_correct' => false,
        ]);


        //SQL12問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで数値の合計を求めるときに使用する集計関数はどれか？',
            'explanation' =>
                'SUMは指定した列の合計値を求めるために使用する集計関数。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SUM',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MAX',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COUNT',
            'is_correct' => false,
        ]);


        //SQL13問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで平均値を求めるときに使用する集計関数はどれか？',
            'explanation' =>
                'AVGは指定した列の平均値を求めるために使用する集計関数。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MIN',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'AVG',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SUM',
            'is_correct' => false,
        ]);


        //SQL14問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで最大値を取得するときに使用する集計関数はどれか？',
            'explanation' =>
                'MAXは指定した列の中から最大の値を取得するために使用する集計関数。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MAX',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MIN',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COUNT',
            'is_correct' => false,
        ]);


        //SQL15問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで最小値を取得するときに使用する集計関数はどれか？',
            'explanation' =>
                'MINは指定した列の中から最小の値を取得するために使用する集計関数。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COUNT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MIN',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MAX',
            'is_correct' => false,
        ]);

        //SQL16問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで同じ値を持つデータをまとめて集計するときに使用する句はどれか？',
            'explanation' =>
                'GROUP BYは指定した列ごとにデータをグループ化するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GROUP BY',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ORDER BY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'WHERE',
            'is_correct' => false,
        ]);


        //SQL17問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'GROUP BYでグループ化した結果に条件を指定するときに使用する句はどれか？',
            'explanation' =>
                'HAVINGはGROUP BYでまとめた結果に対して条件を指定するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'WHERE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'HAVING',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'LIMIT',
            'is_correct' => false,
        ]);


        //SQL18問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '複数のテーブルを関連付けてデータを取得する操作を何というか？',
            'explanation' =>
                'JOINを使用すると、複数のテーブルを結合してデータを取得できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SORT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'JOIN',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'FILTER',
            'is_correct' => false,
        ]);


        //SQL19問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'INNER JOINの説明として正しいものはどれか？',
            'explanation' =>
                'INNER JOINは結合条件に一致したデータだけを取得する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '両方のテーブルで一致するデータだけ取得する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '左側のテーブルのすべてのデータを取得する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データを削除するための命令である',
            'is_correct' => false,
        ]);


        //SQL20問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'LEFT JOINの説明として正しいものはどれか？',
            'explanation' =>
                'LEFT JOINは左側のテーブルを基準にして、右側に一致するデータがあれば結合する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '右側のテーブルだけ取得する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '左側のテーブルのデータをすべて取得する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '一致したデータだけ取得する',
            'is_correct' => false,
        ]);

         //SQL21問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLでNULLのデータを検索するときに使用する条件はどれか？',
            'explanation' =>
                'IS NULLは、値がNULL（未設定）のデータを取得するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'IS NULL',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'IS EMPTY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NULL CHECK',
            'is_correct' => false,
        ]);


        //SQL22問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLでNULLではないデータを検索するときに使用する条件はどれか？',
            'explanation' =>
                'IS NOT NULLを使うと、NULLではない値を持つデータを取得できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NOT NULL',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'IS NOT NULL',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NOT EMPTY',
            'is_correct' => false,
        ]);


        //SQL23問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで指定した文字列を含むデータを検索するときに使用する演算子はどれか？',
            'explanation' =>
                'LIKEを使うと、ワイルドカード（%や_）を利用したあいまい検索ができる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MATCH',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'LIKE',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SEARCH',
            'is_correct' => false,
        ]);


        //SQL24問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで指定した範囲内のデータを検索するときに使用する演算子はどれか？',
            'explanation' =>
                'BETWEENを使うと、指定した範囲内にある値を検索できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'RANGE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'AREA',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'BETWEEN',
            'is_correct' => true,
        ]);


        //SQL25問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで複数の値のどれかに一致するデータを検索するときに使用する演算子はどれか？',
            'explanation' =>
                'INを使うと、複数の候補値の中に一致するデータを取得できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ANY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'IN',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MATCH',
            'is_correct' => false,
        ]);

        //SQL26問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'テーブル内で各行を一意に識別するために設定するキーはどれか？',
            'explanation' =>
                'PRIMARY KEY（主キー）は、テーブル内のデータを一意に識別するために設定する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'PRIMARY KEY',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'FOREIGN KEY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DEFAULT',
            'is_correct' => false,
        ]);


        //SQL27問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '他のテーブルのデータと関連付けるために使用するキーはどれか？',
            'explanation' =>
                'FOREIGN KEY（外部キー）は、他のテーブルの主キーなどを参照してテーブル同士を関連付ける。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UNIQUE KEY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'FOREIGN KEY',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'PRIMARY KEY',
            'is_correct' => false,
        ]);


        //SQL28問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '同じ値を重複して登録できないようにする制約はどれか？',
            'explanation' =>
                'UNIQUE制約を設定すると、指定した列に同じ値を複数登録できなくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NULL',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ORDER',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UNIQUE',
            'is_correct' => true,
        ]);


        //SQL29問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '列にNULL（値が存在しない状態）を登録できないようにする制約はどれか？',
            'explanation' =>
                'NOT NULL制約を設定すると、その列には必ず値を入力する必要がある。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NOT NULL',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NO NULL',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'REQUIRED',
            'is_correct' => false,
        ]);


        //SQL30問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLで新しいテーブルを作成するときに使用する命令はどれか？',
            'explanation' =>
                'CREATE TABLEを使用すると、新しいテーブルを作成できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ADD TABLE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CREATE TABLE',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'NEW TABLE',
            'is_correct' => false,
        ]);

        //SQL31問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '既存のテーブル構造を変更するときに使用するSQL命令はどれか？',
            'explanation' =>
                'ALTER TABLEは、既存のテーブルに列を追加したり変更したりするときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UPDATE TABLE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ALTER TABLE',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CHANGE TABLE',
            'is_correct' => false,
        ]);


        //SQL32問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '既存のテーブルを削除するときに使用するSQL命令はどれか？',
            'explanation' =>
                'DROP TABLEは、テーブルそのものを削除するときに使用する。テーブル構造も削除される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'REMOVE TABLE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DELETE TABLE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DROP TABLE',
            'is_correct' => true,
        ]);


        //SQL33問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'テーブル構造を残したまま、すべてのデータを削除するSQL命令はどれか？',
            'explanation' =>
                'TRUNCATEはテーブル構造を残したまま、登録されているデータをすべて削除する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'TRUNCATE',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CLEAR',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'RESET',
            'is_correct' => false,
        ]);


        //SQL34問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '検索結果を指定した件数だけ飛ばして表示するときに使用する句はどれか？',
            'explanation' =>
                'OFFSETは、検索結果の先頭から指定した件数を飛ばして取得するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'LIMIT',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'OFFSET',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'REMOVE',
            'is_correct' => false,
        ]);


        //SQL35問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '複数の処理をひとつのまとまりとして扱い、処理を確定したり取り消したりできる仕組みを何というか？',
            'explanation' =>
                'TRANSACTIONは複数の処理をひとつのまとまりとして扱う仕組み。成功した処理をCOMMITで確定し、取り消す場合はROLLBACKを使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'PROCESS',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CONNECTION',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'TRANSACTION',
            'is_correct' => true,
        ]);

        //SQL36問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'データ検索を高速化するために作成するものはどれか？',
            'explanation' =>
                'INDEX（インデックス）は、検索速度を向上させるために作成する仕組み。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'INDEX',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COLUMN',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'RECORD',
            'is_correct' => false,
        ]);


        //SQL37問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'あらかじめ定義したSQLの結果を仮想的なテーブルとして扱うものはどれか？',
            'explanation' =>
                'VIEW（ビュー）は、SELECT文の結果を仮想的なテーブルとして利用できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'TABLE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'VIEW',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'KEY',
            'is_correct' => false,
        ]);


        //SQL38問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '複数のSELECT結果を縦方向に結合するときに使用する命令はどれか？',
            'explanation' =>
                'UNIONは複数のSELECT文の結果を結合するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'JOIN',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'UNION',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'MERGE',
            'is_correct' => false,
        ]);


        //SQL39問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '指定した条件に一致するデータが存在するかを確認するときに使用するものはどれか？',
            'explanation' =>
                'EXISTSは、サブクエリの結果が存在するかどうかを確認するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'EXISTS',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'FOUND',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CHECK',
            'is_correct' => false,
        ]);


        //SQL40問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQL文の中に別のSQL文を記述することを何というか？',
            'explanation' =>
                'SUBQUERY（サブクエリ）は、SQL文の中に別のSQL文を組み込む記述方法。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'INNER QUERY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SUB QUERY',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SUBQUERY',
            'is_correct' => true,
        ]);

         //SQL41問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'データの重複や更新時のミスを減らすために、データベースの構造を整理することを何というか？',
            'explanation' =>
                '正規化とは、同じデータを何度も保存することによる重複や矛盾を防ぐために、テーブル構造を整理すること。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '暗号化',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '圧縮',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '正規化',
            'is_correct' => true,
        ]);


        //SQL42問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '第一正規形で重要なルールはどれか？',
            'explanation' =>
                '第一正規形では、1つのセルに複数の値を入れず、1項目1値で管理する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'すべてのテーブルを1つにまとめる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '1つの項目に複数の値を入れない',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'すべてのデータを削除する',
            'is_correct' => false,
        ]);


        //SQL43問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '商品情報を注文データとは別のテーブルに分ける主な理由はどれか？',
            'explanation' =>
                '商品情報を別テーブルで管理することで、同じ情報を何度も保存する必要がなくなり、重複を減らせる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SQLを書く必要をなくすため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ず検索速度を上げるため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データの重複を減らすため',
            'is_correct' => true,
        ]);


        //SQL44問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'データベースを正規化するメリットとして正しいものはどれか？',
            'explanation' =>
                '正規化によってデータの重複が減り、更新時の矛盾や入力ミスを防ぎやすくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データ更新時のミスを減らせる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SQLが不要になる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずデータ量が半分になる',
            'is_correct' => false,
        ]);


        //SQL45問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                '正規化を行う主な目的として正しいものはどれか？',
            'explanation' =>
                '正規化は、データの重複を減らし、管理しやすいデータベース構造にすることを目的としている。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '同じ情報を何度も保存しないようにする',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'すべてのテーブルを削除する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースを必ず高速化する',
            'is_correct' => false,
        ]);

                //SQL46問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'Webアプリケーションで、悪意のあるSQL文を入力される攻撃を何というか？',
            'explanation' =>
                'SQLインジェクションは、入力値にSQL文を混ぜることで、意図しないデータ取得や変更を行う攻撃。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'クロスサイトスクリプティング',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SQLインジェクション',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'セッションハイジャック',
            'is_correct' => false,
        ]);


        //SQL47問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'SQLインジェクション対策として有効な方法はどれか？',
            'explanation' =>
                'プリペアドステートメントを使用すると、SQL文と入力値を分けて扱うことができ、SQLインジェクション対策になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '入力チェックを完全になくす',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SQL文を画面に表示する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プリペアドステートメントを使用する',
            'is_correct' => true,
        ]);


        //SQL48問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'NULLとは何を表す値か？',
            'explanation' =>
                'NULLは「値が存在しない状態」を表す。0や空文字とは異なる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '空文字を表す値',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '値が存在しない状態',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '0を表す値',
            'is_correct' => false,
        ]);


        //SQL49問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'データベース障害に備えて、データを別の場所に保存しておくことを何というか？',
            'explanation' =>
                'バックアップは、障害や誤操作が発生した場合にデータを復元するために行う。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'キャッシュ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンパイル',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'バックアップ',
            'is_correct' => true,
        ]);


        //SQL50問目
        $question = Question::create([
            'category_id' => 3,
            'question_text' =>
                'トランザクション内の処理を確定するときに使用する命令はどれか？',
            'explanation' =>
                'COMMITは、トランザクション内で行った変更を正式に保存する命令。変更を取り消す場合はROLLBACKを使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DELETE',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'DROP',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'COMMIT',
            'is_correct' => true,
        ]);


        //Git1問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitとは何のために使用されるツールか？',
            'explanation' =>
                'Gitは、プログラムやファイルの変更履歴を管理するためのバージョン管理システム。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Webサイトを公開するためのツール',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムの変更履歴を管理するためのツール',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースを作成するためのツール',
            'is_correct' => false,
        ]);


        //Git2問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで管理されているプロジェクトの保存場所を何というか？',
            'explanation' =>
                'リポジトリ（repository）は、Gitで管理するファイルや変更履歴を保存する場所。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンパイラ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'パッケージ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リポジトリ',
            'is_correct' => true,
        ]);


        //Git3問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで変更内容を履歴として保存する操作を何というか？',
            'explanation' =>
                'commitは、現在の変更内容をGitの履歴として記録する操作。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'commit',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'clone',
            'is_correct' => false,
        ]);


        //Git4問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubとGitの関係として正しいものはどれか？',
            'explanation' =>
                'Gitは変更履歴を管理するソフトウェアで、GitHubはGitのデータを保存・共有できるWebサービス。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubはGitと同じソフトウェアである',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitはGitHubを利用するためだけに存在する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubはGitのデータを保存・共有できるWebサービスである',
            'is_correct' => true,
        ]);


        //Git5問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitを使うメリットとして正しいものはどれか？',
            'explanation' =>
                'Gitではcommit履歴を利用することで、以前の状態へ戻すことができる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムのバグを自動的に修正する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変更前の状態に戻すことができる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずプログラムの実行速度が速くなる',
            'is_correct' => false,
        ]);
        
        //Git6問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '新しいフォルダをGitで管理できる状態にするコマンドはどれか？',
            'explanation' =>
                'git initは、現在のフォルダをGit管理対象にして、新しいリポジトリを作成するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git init',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git clone',
            'is_correct' => false,
        ]);


        //Git7問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで変更したファイルをcommitの対象として登録するコマンドはどれか？',
            'explanation' =>
                'git addは、変更したファイルをステージングエリアへ追加し、commitする準備をするコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git commit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git add',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git pull',
            'is_correct' => false,
        ]);


        //Git8問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで変更内容を履歴として保存するコマンドはどれか？',
            'explanation' =>
                'git commitは、ステージングエリアに登録された変更内容を履歴として保存するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git status',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git branch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git commit',
            'is_correct' => true,
        ]);


        //Git9問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで現在のファイル変更状態を確認するコマンドはどれか？',
            'explanation' =>
                'git statusを使用すると、変更されたファイルやステージング状態を確認できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git status',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git init',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git merge',
            'is_correct' => false,
        ]);


        //Git10問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitのcommit前に、変更内容を登録しておく場所を何というか？',
            'explanation' =>
                'ステージングエリアは、git addで追加した変更をcommitする前に一時的に保存しておく場所。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リモートリポジトリ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ステージングエリア',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '作業ディレクトリ',
            'is_correct' => false,
        ]);

        //Git11問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '自分のPC内にあるGitで管理されたリポジトリを何というか？',
            'explanation' =>
                'ローカルリポジトリは、自分のPC内に存在するGit管理されたリポジトリ。commitなどの操作を行う場所。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ローカルリポジトリ',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リモートリポジトリ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '公開リポジトリ',
            'is_correct' => false,
        ]);


        //Git12問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubなど、ネットワーク上に保存されているリポジトリを何というか？',
            'explanation' =>
                'リモートリポジトリは、GitHubなどのサーバー上に存在するリポジトリ。複数人で共有することができる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ローカルリポジトリ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リモートリポジトリ',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '作業ディレクトリ',
            'is_correct' => false,
        ]);


        //Git13問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'ローカルリポジトリの変更内容をリモートリポジトリへ送るコマンドはどれか？',
            'explanation' =>
                'git pushは、自分のPC内のcommit履歴をGitHubなどのリモートリポジトリへ送るコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git pull',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git clone',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => true,
        ]);


        //Git14問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'リモートリポジトリの変更内容をローカルへ取得するコマンドはどれか？',
            'explanation' =>
                'git pullは、リモートリポジトリの最新情報を取得して、ローカル環境へ反映するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git pull',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git add',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git init',
            'is_correct' => false,
        ]);


        //Git15問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '既存のGitリポジトリをコピーして、自分のPCに取得するコマンドはどれか？',
            'explanation' =>
                'git cloneは、GitHubなどにあるリポジトリを自分のPCへコピーするコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git commit',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git clone',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git status',
            'is_correct' => false,
        ]);


        //Git16問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitにおける「ブランチ」とは何か？',
            'explanation' =>
                'ブランチは、変更履歴を分岐させて別々に管理する仕組み。新機能追加などを安全に行うために利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムを実行するための環境',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '作業を分けて管理するための履歴の分岐',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubのアカウント名',
            'is_correct' => false,
        ]);


        //Git17問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで最も基本となるブランチとして利用されることが多いものはどれか？',
            'explanation' =>
                'mainブランチは、プロジェクトの中心となるブランチ。以前はmasterという名前も多く使われていた。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'mainブランチ',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'testブランチ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'backupブランチ',
            'is_correct' => false,
        ]);


        //Git18問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '新しい機能を追加するときにブランチを作成する主な理由はどれか？',
            'explanation' =>
                'ブランチを分けることで、mainブランチに影響を与えずに新機能の開発や修正を行うことができる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの容量を増やすため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ファイルを削除するため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'mainブランチに影響を与えず作業するため',
            'is_correct' => true,
        ]);


        //Git19問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '別々に作成したブランチの変更内容を1つに統合する操作を何というか？',
            'explanation' =>
                'merge（マージ）は、複数のブランチの変更履歴を統合する操作。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'merge',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'clone',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'push',
            'is_correct' => false,
        ]);


        //Git20問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでブランチを確認するために使用するコマンドはどれか？',
            'explanation' =>
                'git branchは、ブランチ一覧の表示や新しいブランチの作成に使用するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git branch',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git pull',
            'is_correct' => false,
        ]);

        //Git21問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで、変更したファイルを元の状態に戻すために使用できるコマンドはどれか？',
            'explanation' =>
                'git restore は、変更したファイルを指定した状態に戻すために使用するコマンド。作業中の変更を取り消したい場合などに使用できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git branch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git merge',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git restore',
            'is_correct' => true,
        ]);


        //Git22問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでブランチを切り替えるために使用される現在推奨されているコマンドはどれか？',
            'explanation' =>
                'git switchは、ブランチの切り替えを行うためのコマンド。以前はgit checkoutでも同様の操作が行われていた。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git switch',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git commit',
            'is_correct' => false,
        ]);


        //Git23問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubで、作成したブランチの変更内容を確認してもらい、mainブランチへ取り込むための提案を何というか？',
            'explanation' =>
                'Pull Requestは、変更内容をレビューしてもらい、問題がなければmainブランチへ取り込むための仕組み。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Pull Request',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Commit Request',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Merge Request',
            'is_correct' => false,
        ]);


        //Git24問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'チーム開発でコードレビューを行う主な目的はどれか？',
            'explanation' =>
                'コードレビューでは、他の開発者がコードを確認することで、バグや改善点を発見し品質を高める。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずコード量を増やすため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの容量を減らすため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コードの品質向上や問題の早期発見のため',
            'is_correct' => true,
        ]);


        //Git25問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '新しい機能を開発するとき、mainブランチから分けて作成するブランチを何と呼ぶことがあるか？',
            'explanation' =>
                'featureブランチは、新機能追加など特定の作業を行うために作成するブランチ。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'remoteブランチ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'featureブランチ',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'masterブランチ',
            'is_correct' => false,
        ]);

        //Git26問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで管理対象から除外したいファイルを指定するために使用するファイルはどれか？',
            'explanation' =>
                '.gitignoreに指定したファイルやフォルダはGitの管理対象から除外できる。設定ファイルや一時ファイルなどを除外するために利用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '.gitconfig',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '.github',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '.gitignore',
            'is_correct' => true,
        ]);


        //Git27問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでファイルの変更内容を確認するために使用するコマンドはどれか？',
            'explanation' =>
                'git diffは、commit前などにファイルの変更内容の差分を確認するためのコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git diff',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git clone',
            'is_correct' => false,
        ]);


        //Git28問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                '`git fetch`の説明として正しいものはどれか？',
            'explanation' =>
                'git fetchはリモートリポジトリの最新情報を取得するが、現在の作業内容へ自動反映は行わない。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                'リモートの変更を取得するが、現在の作業内容へ自動反映しないコマンド',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                'Gitをインストールするコマンド',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                'ファイルを削除するコマンド',
            'is_correct' => false,
        ]);


        //Git29問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで特定のバージョンやリリース地点に目印を付ける機能を何というか？',
            'explanation' =>
                'tagは、特定のcommitに名前を付けて管理する機能。リリース版などの目印として利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'branch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'merge',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'tag',
            'is_correct' => true,
        ]);


        //Git30問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでリリースされたバージョンを管理するためにtagが使われる理由として正しいものはどれか？',
            'explanation' =>
                'tagを利用すると、v1.0.0のようにリリース時点のcommitへ名前を付けて管理できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                'GitHubのアカウントを作成するため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                '過去の特定の状態を分かりやすく確認できるため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' =>
                'プログラムを自動的に修正するため',
            'is_correct' => false,
        ]);

        //Git31問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで、複数の変更内容が競合して自動的に統合できない状態を何というか？',
            'explanation' =>
                'コンフリクト（conflict）は、複数の変更が衝突してGitが自動で統合できない状態。手動で修正する必要がある。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンフリクト',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'クローン',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'タグ',
            'is_correct' => false,
        ]);


        //Git32問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで過去のcommitを取り消すために、新しいcommitを作成するコマンドはどれか？',
            'explanation' =>
                'git revertは、過去のcommitを打ち消す新しいcommitを作成する方法。共有済みの履歴を安全に取り消す場合によく利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git reset',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git revert',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git stash',
            'is_correct' => false,
        ]);


        //Git33問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでcommit履歴を確認するために使用するコマンドはどれか？',
            'explanation' =>
                'git logを使うことで、commit履歴やcommitの情報を確認できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git log',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git push',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git add',
            'is_correct' => false,
        ]);


        //Git34問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitで現在の変更を一時的に保存して、作業場所をきれいにするコマンドはどれか？',
            'explanation' =>
                'git stashは、commitしていない変更内容を一時保存する機能。別の作業へ切り替える場合などに利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git merge',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git stash',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git clone',
            'is_correct' => false,
        ]);


        //Git35問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでcommit履歴を変更したり、指定した状態へ戻したりするために使用されるコマンドはどれか？',
            'explanation' =>
                'git resetは、HEADやステージング状態を変更し、過去の状態へ戻すために使用される。ただし共有済みの履歴を変更する場合は注意が必要。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git pull',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git branch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git reset',
            'is_correct' => true,
        ]);

        //Git36問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubで、他の人のリポジトリを自分のアカウントへコピーする機能を何というか？',
            'explanation' =>
                'forkは、他のユーザーのリポジトリを自分のGitHubアカウントへコピーする機能。元のリポジトリへ影響を与えずに変更を加えられる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'merge',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'stash',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'fork',
            'is_correct' => true,
        ]);


        //Git37問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubのIssue（イシュー）は主に何のために利用されるか？',
            'explanation' =>
                'Issueは、バグ報告や機能追加の提案、作業内容の管理などに利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムを実行するため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'バグ報告やタスク管理を行うため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitをインストールするため',
            'is_correct' => false,
        ]);


        //Git38問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'READMEファイルの主な目的はどれか？',
            'explanation' =>
                'READMEは、プロジェクトの概要、セットアップ方法、使用方法などを説明するためのファイル。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プロジェクトの説明や使い方を記載するため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの履歴を削除するため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースを作成するため',
            'is_correct' => false,
        ]);


        //Git39問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHub Actionsとは何か？',
            'explanation' =>
                'GitHub Actionsでは、コードのテストやデプロイなどの処理を自動化できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubのアカウント管理機能',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの代わりになる新しいツール',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHub上で自動処理を実行できる仕組み',
            'is_correct' => true,
        ]);


        //Git40問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'CI/CDの「CI」とは何を意味するか？',
            'explanation' =>
                'CI（Continuous Integration）は継続的インテグレーションの意味。コード変更を頻繁に統合し、自動テストなどを行う考え方。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Code Integration',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Continuous Integration',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Computer Installation',
            'is_correct' => false,
        ]);
        

        //Git41問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでユーザー名やメールアドレスなどの設定を確認・変更するために使用するコマンドはどれか？',
            'explanation' =>
                'git configは、Gitの設定情報を確認・変更するためのコマンド。ユーザー名やメールアドレスなどを設定するときに使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git branch',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git merge',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'git config',
            'is_correct' => true,
        ]);


        //Git42問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでパスワードや秘密情報を含むファイルを管理対象に入れない主な理由はどれか？',
            'explanation' =>
                'APIキーやパスワードなどの秘密情報をGitで公開すると、不正利用や情報漏洩につながる可能性がある。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの速度が遅くなるため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '情報漏洩につながる可能性があるため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubではファイルを保存できないため',
            'is_correct' => false,
        ]);


        //Git43問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'GitHubへ接続する際に利用される認証方式の1つはどれか？',
            'explanation' =>
                'SSHは、安全にリモートサーバーと通信するための仕組み。GitHubとの接続にも利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'SSH',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'HTML',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'CSS',
            'is_correct' => false,
        ]);


        //Git44問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Git Flowとは何か？',
            'explanation' =>
                'Git Flowは、mainやdevelop、featureなど複数のブランチを使って開発を管理する考え方。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitを高速化するツール',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubの画面デザイン',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitを使ったブランチ運用の方法',
            'is_correct' => true,
        ]);


        //Git45問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'セマンティックバージョニング（Semantic Versioning）で「1.2.3」の数字が表すものとして正しいものはどれか？',
            'explanation' =>
                'Semantic Versioningでは、1がメジャー、2がマイナー、3がパッチバージョンを表す。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitのcommit数',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'メジャー・マイナー・パッチのバージョン番号',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ファイルサイズ',
            'is_correct' => false,
        ]);

        //Git46問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitのrebase（リベース）とは何を行う操作か？',
            'explanation' =>
                'rebaseは、あるブランチの変更履歴を別のブランチの最新状態へ付け替える操作。履歴を整理するときなどに利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitを削除する操作',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ファイルを圧縮する操作',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '変更履歴を別の場所へ付け替える操作',
            'is_correct' => true,
        ]);


        //Git47問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitのcherry-pickとは何をするための機能か？',
            'explanation' =>
                'cherry-pickを使うと、指定したcommitだけを別のブランチへ反映できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'リポジトリをコピーする機能',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '特定のcommitだけを別のブランチへ取り込む機能',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubへログインする機能',
            'is_correct' => false,
        ]);


        //Git48問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitでいうupstreamとは何を表すことが多いか？',
            'explanation' =>
                'upstreamは、ローカルブランチがどのリモートブランチと連携するかを示す関係。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '追跡対象となるリモートブランチとの関係',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitをインストールする場所',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ファイルの保存形式',
            'is_correct' => false,
        ]);


        //Git49問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'Gitをコマンドではなく画面操作で利用できるツールを何というか？',
            'explanation' =>
                'Git GUIツールでは、commitやbranch操作などを画面上で行うことができる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンパイラ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベース',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Git GUIツール',
            'is_correct' => true,
        ]);


        //Git50問目
        $question = Question::create([
            'category_id' => 4,
            'question_text' =>
                'チーム開発で、いきなりmainブランチに直接変更をコミットするのではなく、別のブランチを使って作業する主な理由はどれか？',
            'explanation' =>
                '他のメンバーの作業やmainブランチへの影響を抑えながら、安全に変更を進めるため。チーム開発では、作業内容ごとにブランチを分けて開発する方法がよく使われる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの容量を小さくするため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ほかのメンバーの作業やmainブランチへの影響を抑えるため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubを使わずに開発するため',
            'is_correct' => false,
        ]);

        //Docker1問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerとは何か？',
            'explanation' =>
                'Dockerは、アプリケーションと必要な環境をまとめたコンテナを作成・実行するためのプラットフォーム。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースを管理するためのツール',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アプリケーションをコンテナとして動作させるためのプラットフォーム',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムを書くためのプログラミング言語',
            'is_correct' => false,
        ]);


        //Docker2問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerの「コンテナ」とは何か？',
            'explanation' =>
                'コンテナは、アプリケーションやライブラリなどをまとめて動作させるための隔離された環境。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの変更履歴',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースのテーブル',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アプリケーションを動かすための独立した実行環境',
            'is_correct' => true,
        ]);


        //Docker3問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerイメージとは何か？',
            'explanation' =>
                'Dockerイメージには、アプリケーション実行に必要なファイルや設定が含まれており、コンテナ作成の元になる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを作成するための元となるデータ',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerを削除するコマンド',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'GitHubのプロフィール画像',
            'is_correct' => false,
        ]);


        //Docker4問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'DockerコンテナとDockerイメージの関係として正しいものはどれか？',
            'explanation' =>
                'Dockerイメージは設計図のようなもので、そのイメージからコンテナを作成してアプリケーションを動かす。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'イメージとコンテナは全く同じもの',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'イメージを元にコンテナを作成して実行する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナからイメージを作成することはできない',
            'is_correct' => false,
        ]);


        //Docker5問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerを利用するメリットとして適切なものはどれか？',
            'explanation' =>
                'Dockerを使うと、同じ環境を簡単に再現できるため、チーム開発で環境差異を減らせる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずプログラムのバグがなくなる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'インターネット接続が不要になる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '開発環境を他の人と共有しやすくなる',
            'is_correct' => true,
        ]);

        //Docker6問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerでイメージからコンテナを作成・起動するために使用する代表的なコマンドはどれか？',
            'explanation' =>
                'docker runは、Dockerイメージからコンテナを作成し、そのコンテナを起動するためのコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker save',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker run',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker delete',
            'is_correct' => false,
        ]);


        //Docker7問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerfileとは何か？',
            'explanation' =>
                'Dockerfileには、Dockerイメージを作成するための手順を記述する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerコンテナを削除するためのファイル',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの設定ファイル',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを作成する手順を記述したファイル',
            'is_correct' => true,
        ]);


        //Docker8問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerイメージを作成するために使用するコマンドはどれか？',
            'explanation' =>
                'docker buildは、Dockerfileを元にDockerイメージを作成するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker build',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker start',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker stop',
            'is_correct' => false,
        ]);


        //Docker9問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナの一覧を確認するために使用するコマンドはどれか？',
            'explanation' =>
                'docker psを使うことで、現在起動しているコンテナの一覧を確認できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker image',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker ps',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker create',
            'is_correct' => false,
        ]);


        //Docker10問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナを停止するために使用するコマンドはどれか？',
            'explanation' =>
                'docker stopは、現在動作しているDockerコンテナを停止するためのコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker build',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker pull',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker stop',
            'is_correct' => true,
        ]);

        //Docker11問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeとは何か？',
            'explanation' =>
                'Docker Composeは、複数のコンテナを設定ファイルでまとめて管理・起動するための仕組み。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '複数のコンテナをまとめて管理するための仕組み',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを削除するコマンド',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitのブランチ管理機能',
            'is_correct' => false,
        ]);


        //Docker12問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeで設定を記述するファイルはどれか？',
            'explanation' =>
                'Docker Composeでは、compose.yamlやdocker-compose.ymlにコンテナ構成や設定を記述する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerfile',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'package.json',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'compose.yaml（docker-compose.yml）',
            'is_correct' => true,
        ]);


        //Docker13問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeで複数のコンテナを起動するためによく使用されるコマンドはどれか？',
            'explanation' =>
                'docker compose upは、設定ファイルを元に複数のコンテナを作成・起動するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose stop',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose up',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose delete',
            'is_correct' => false,
        ]);


        //Docker14問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeを利用するメリットとして適切なものはどれか？',
            'explanation' =>
                'Docker Composeを使うことで、Webサーバーやデータベースなど複数サービスの開発環境を簡単に再現できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '複数サービスの環境構築を簡単に再現できる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずコードのバグを修正できる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラミング言語が不要になる',
            'is_correct' => false,
        ]);


        //Docker15問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Webアプリケーション開発でDocker Composeを使う例として適切なものはどれか？',
            'explanation' =>
                'Webアプリでは、アプリケーション・データベース・キャッシュなど複数のサービスを別コンテナで管理することが多い。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'HTMLファイルを自動生成する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'キーボード入力を高速化する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アプリ用コンテナとデータベース用コンテナを同時に管理する',
            'is_correct' => true,
        ]);

        //Docker16問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerのvolume（ボリューム）とは何か？',
            'explanation' =>
                'volumeは、コンテナとは別にデータを保存し、コンテナを削除してもデータを保持できる仕組み。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを作成するためのファイル',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナとは別にデータを保存する仕組み',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerを起動するためのコマンド',
            'is_correct' => false,
        ]);


        //Docker17問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerでvolumeを利用する主な目的はどれか？',
            'explanation' =>
                'volumeを利用すると、コンテナを削除してもデータを保持できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを削除してもデータを残すため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナの処理速度を必ず10倍にするため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitの履歴を保存するため',
            'is_correct' => false,
        ]);


        //Docker18問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker networkの主な役割はどれか？',
            'explanation' =>
                'Docker networkを利用すると、Webアプリ用コンテナとDBコンテナなどが通信できるようになる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを圧縮する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを削除する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナ同士が通信できるようにする',
            'is_correct' => true,
        ]);


        //Docker19問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナの特徴として正しいものはどれか？',
            'explanation' =>
                'コンテナはホストOSのカーネルを共有して動作するため、仮想マシンより軽量に動作する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ず物理サーバーを1台専有する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ホストOSのカーネルを共有して動作する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'インターネット接続が必須である',
            'is_correct' => false,
        ]);


        //Docker20問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナを停止後、再び起動するために使用するコマンドはどれか？',
            'explanation' =>
                'docker startは停止している既存コンテナを再び起動するためのコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker start',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker build',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker pull',
            'is_correct' => false,
        ]);

        //Docker21問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerを利用して開発環境を共有するメリットとして適切なものはどれか？',
            'explanation' =>
                'Dockerを利用すると、同じ設定の環境を再現できるため、開発者ごとの環境差異を減らせる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '全員が同じOSを購入する必要がなくなる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '開発者ごとの環境差異を減らせる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずプログラムの処理速度が向上する',
            'is_correct' => false,
        ]);


        //Docker22問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Hubとは何か？',
            'explanation' =>
                'Docker Hubは、Dockerイメージを公開・取得できるレジストリサービス。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを共有・公開できるサービス',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerコンテナを自動削除するツール',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Docker専用のプログラミング言語',
            'is_correct' => false,
        ]);


        //Docker23問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerで「pull」とは何を行う操作か？',
            'explanation' =>
                'docker pullは、Docker HubなどのレジストリからDockerイメージを取得するコマンド。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを停止する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'イメージを削除する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'イメージを取得する',
            'is_correct' => true,
        ]);


        //Docker24問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerで「push」とは何を行う操作か？',
            'explanation' =>
                'docker pushは、自分で作成したDockerイメージをDocker Hubなどへアップロードするために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを作成する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージをレジストリへアップロードする',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを停止する',
            'is_correct' => false,
        ]);


        //Docker25問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナで動作しているWebアプリに、ホストPCのブラウザからアクセスできるようにするために利用するものはどれか？',
            'explanation' =>
                '-p オプションを使うと、ホスト側のポートとコンテナ側のポートを対応付けて、外部からコンテナのサービスへアクセスできるようにできます。「p」は、ポートの「p」。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '-p オプション',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '-v オプション',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '-e オプション',
            'is_correct' => false,
        ]);

        //Docker26問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'DockerfileのFROM命令の役割はどれか？',
            'explanation' =>
                'FROMはDockerfileでベースとなるDockerイメージを指定する命令。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを停止する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ベースとなるDockerイメージを指定する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ファイルを削除する',
            'is_correct' => false,
        ]);


        //Docker27問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'DockerfileのRUN命令の役割はどれか？',
            'explanation' =>
                'RUNは、Dockerイメージ作成時にパッケージインストールなどのコマンドを実行する命令。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを公開する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Docker Hubへアップロードする',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'イメージ作成時にコマンドを実行する',
            'is_correct' => true,
        ]);


        //Docker28問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'DockerfileのCOPY命令の役割はどれか？',
            'explanation' =>
                'COPYは、ホスト側のファイルをDockerイメージ内へコピーするために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ホスト側のファイルをイメージ内へコピーする',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナを削除する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ネットワークを作成する',
            'is_correct' => false,
        ]);


        //Docker29問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'DockerfileのCMD命令の役割として正しいものはどれか？',
            'explanation' =>
                'CMDは、コンテナ起動時に実行するデフォルトコマンドを指定する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを削除する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナ起動時に実行するデフォルトコマンドを指定する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Gitのcommitを作成する',
            'is_correct' => false,
        ]);


        //Docker30問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerfileを使うメリットとして適切なものはどれか？',
            'explanation' =>
                'Dockerfileに環境構築手順を書くことで、同じ環境を何度でも再現しやすくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずアプリの速度が向上する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コードを書く必要がなくなる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '環境構築手順をコードとして管理できる',
            'is_correct' => true,
        ]);

        //Docker31問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerで環境変数を利用する主な目的はどれか？',
            'explanation' =>
                '環境変数を利用すると、データベース接続情報などの設定値をコードから分離して管理できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'コンテナの処理速度を上げるため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージを削除するため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '設定値を外部から変更しやすくするため',
            'is_correct' => true,
        ]);


        //Docker32問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeで環境変数を管理する方法としてよく利用されるものはどれか？',
            'explanation' =>
                '.envファイルを利用することで、環境ごとに異なる設定値を管理しやすくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '.envファイルを利用する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'HTMLファイルに直接書く',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '画像ファイルに保存する',
            'is_correct' => false,
        ]);


        //Docker33問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerでデータベースのパスワードなどをコードに直接書かない理由はどれか？',
            'explanation' =>
                'パスワードなどの機密情報をコードに直接書くと、Gitなどで公開される危険があるため。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerが動作しなくなるため',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'セキュリティ上のリスクがあるため',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ず処理速度が低下するため',
            'is_correct' => false,
        ]);


        //Docker34問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                '.dockerignoreファイルの役割はどれか？',
            'explanation' =>
                '.dockerignoreを使うことで、Dockerイメージを作成するときに、不要なファイルを除外する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerコンテナを停止する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Docker Hubへログインする',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Dockerイメージ作成時に不要なファイルを除外する',
            'is_correct' => true,
        ]);


        //Docker35問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerで秘密情報を安全に管理するときに推奨される方法はどれか？',
            'explanation' =>
                'パスワードやAPIキーなどの秘密情報は、ソースコードに直接書かず、秘密管理サービスなどを利用して管理する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '環境変数や秘密管理サービスを利用する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ソースコードに直接パスワードを書く',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '全員で同じパスワードを使う',
            'is_correct' => false,
        ]);

         //Docker36問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナのログを確認するために使用するコマンドはどれか？',
            'explanation' =>
                'docker logsを使うことで、コンテナ内で出力されたログを確認できる。アプリが起動しない原因調査などで利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker clean',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker logs',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker remove',
            'is_correct' => false,
        ]);


        //Docker37問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナ内でコマンドを実行するために使用するコマンドはどれか？',
            'explanation' =>
                'docker execを使うと、起動中のコンテナ内でコマンドを実行できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker build',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker pull',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker exec',
            'is_correct' => true,
        ]);


        //Docker38問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                '停止中のコンテナも含めて、すべてのDockerコンテナを確認するために使用するコマンドはどれか？',
            'explanation' =>
                'docker ps -a を使うと、現在起動しているコンテナだけでなく、停止中のコンテナも含めて確認できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker ps -a',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker ps',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker images',
            'is_correct' => false,
        ]);


        //Docker39問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerで不要になったイメージやコンテナを整理する目的で使用されるコマンドはどれか？',
            'explanation' =>
                'docker system pruneを利用すると、Docker環境の不要なリソースを整理できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker run',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker system prune',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker start',
            'is_correct' => false,
        ]);


        //Docker40問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerでコンテナが起動しない場合、最初に確認するとよいものはどれか？',
            'explanation' =>
                'Dockerトラブルでは、まずログやエラーメッセージを確認することで原因を特定しやすくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'キーボードの設定',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '画面の明るさ',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ログやエラーメッセージ',
            'is_correct' => true,
        ]);

        //Docker41問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'CI/CDでDockerを利用するメリットとして適切なものはどれか？',
            'explanation' =>
                'Dockerを利用すると、CI/CD環境でも開発環境と同じ環境を再現しやすくなり、自動テストやデプロイを安定して実行できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ず人間による確認が不要になる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '同じ環境で自動テストやデプロイを実行しやすくなる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'プログラムを書く必要がなくなる',
            'is_correct' => false,
        ]);


        //Docker42問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerを本番環境で利用するメリットとして適切なものはどれか？',
            'explanation' =>
                'Dockerでは、アプリケーションと必要なライブラリや設定をまとめてイメージ化できるため、実行環境をひとつの単位として管理しやすくなる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アプリケーションの実行環境をパッケージ化して管理できる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずサーバーの性能を数倍に向上させる',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'データベースが不要になる',
            'is_correct' => false,
        ]);


        //Docker43問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerコンテナを本番環境で管理する際に利用されることがある仕組みはどれか？',
            'explanation' =>
                'Kubernetesは、多数のコンテナを管理・自動配置するためのコンテナオーケストレーションツール。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Kubernetes',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Excel',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'Photoshop',
            'is_correct' => false,
        ]);


        //Docker44問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerイメージを軽量化するメリットとして適切なものはどれか？',
            'explanation' =>
                '不要なファイルやパッケージを削減すると、イメージサイズが小さくなり、転送や起動が効率化される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '必ずコード量が減る',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ダウンロードや起動を高速化できる',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'バグが完全になくなる',
            'is_correct' => false,
        ]);


        //Docker45問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerを利用した開発で推奨される考え方はどれか？',
            'explanation' =>
                'DockerfileやComposeファイルはコードとして管理できるため、変更履歴を追跡したり、同じ環境を再構築したりできる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '環境構築手順をコード化して管理する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ソースコードに直接パスワードを書く',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => '環境設定をすべて手作業で行う',
            'is_correct' => false,
        ]);

        //Docker46問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeで起動した複数のコンテナをまとめて停止・削除するために使用するコマンドはどれか？',
            'explanation' =>
                'docker compose down は、Composeで起動したコンテナやネットワークなどをまとめて停止・削除するために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose stop',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose down',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose remove',
            'is_correct' => false,
        ]);


        //Docker47問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Docker Composeの設定内容を確認するために使用できるコマンドはどれか？',
            'explanation' =>
                'docker compose config を使うと、Composeの設定内容を確認できる。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose config',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose build',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker compose option',
            'is_correct' => false,
        ]);


        //Docker48問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Dockerイメージを削除するために使用するコマンドはどれか？',
            'explanation' =>
                'docker rmi は、不要になったDockerイメージを削除するために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker rm',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker stop',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker rmi',
            'is_correct' => true,
        ]);


        //Docker49問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                'Webアプリケーション開発でDockerを利用する構成例として適切なものはどれか？',
            'explanation' =>
                'Webアプリでは、アプリケーション・データベースなどを別々のコンテナとして管理する構成がよく利用される。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'すべての処理を画像ファイルで管理する',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'アプリケーションとデータベースを別コンテナで管理する',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'ソースコードを保存しない',
            'is_correct' => false,
        ]);


        //Docker50問目
        $question = Question::create([
            'category_id' => 5,
            'question_text' =>
                '不要になったDockerコンテナを削除するために使用するコマンドはどれか？',
            'explanation' =>
                'docker rm は、不要になったDockerコンテナを削除するために使用する。',
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker rm',
            'is_correct' => true,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker rmi',
            'is_correct' => false,
        ]);

        Choice::create([
            'question_id' => $question->id,
            'choice_text' => 'docker stop',
            'is_correct' => false,
        ]);

    }
}