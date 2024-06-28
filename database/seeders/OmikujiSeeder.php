<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class OmikujiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('omikujis')->insert([
                'title' => '大"吉"野ケ里遺跡',
                'content' => '吉野ヶ里遺跡（よしのがりいせき）は、神埼市と吉野ヶ里町にまたがり、全長2.5kmの壕に囲まれた日本最大規模の弥生時代の環壕集落（かんごうしゅうらく）跡です。 弥生時代全時期の多数の住居跡、高床倉庫群跡、3,000基を超えるかめ棺墓、弥生時代中期の王の墓と考えられる墳丘墓（ふんきゅうぼ）などが発掘されています。墳丘墓からは、高度な技術を要する有柄銅剣やガラス製の管玉などが出土し、中国大陸や朝鮮半島との交流をうかがわせます。 平成元年に一般公開されたときは、中国の史書『魏志倭人伝（ぎしわじんでん）』に記された邪馬台国の姿を彷彿させるとして大きな話題となりました。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
             DB::table('omikujis')->insert([
                'title' => '小"吉"瀬美智子',
                'content' => 'あなたはちょっとした吉瀬美智子です。実は福岡県朝倉市出身。愛称は「みっちゃん」あなたも◯っちゃんと友達に呼ばせてみましょう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => '中"吉"高由里子',
                'content' => 'あなたはまあまあ吉高由里子です。家に帰ったらうぃぃと言いながらハイボールで乾杯しましょう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => 'うっすら"吉"幾三',
                'content' => '今日のあなたはうっすら吉幾三。おら東京さいくだ、と言いながらさっさとお家にかえりましょう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => 'こってり"吉"岡里帆',
                'content' => '1時間後、あなたは吉岡里帆豚骨醤油味。ニンニクマシマシで召し上がれ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => 'あっさり"吉"田麻也',
                'content' => '2秒後のあなたは闘争心が欠けた日本代表キャプテン。小さな声でみんなをまとめよう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => 'どんより"吉"川晃司',
                'content' => '振り向くと鏡にはどんよりした吉川晃司がいた。そんな日はドナドナを歌いながらカレーをスパイスから煮込みましょう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => 'めえめえ"吉"田羊',
                'content' => 'そんな日は玉露でも嗜みながら羊羹でもたべましょう。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => '博多華丸大"吉"',
                'content' => '華丸さんは大濠高校の先輩。ちなみに大濠高校にはや◯ざみたいな音楽教師がいるよ。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => '"吉"野家よりすき家派',
                'content' => '三種のチーズ牛丼はひと口目最高、残り4分の1は重くて辛い。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
              DB::table('omikujis')->insert([
                'title' => '住んでみたい"吉"祥寺',
                'content' => '井の頭公園でアヒルさんボート乗ってアイスクリーム食べたい。',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
