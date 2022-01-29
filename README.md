# PHP04

■概要
CAMPFIREのような、サポートを受けられるプロジェクトのプラットフォームを作りたいと思い、できる限り真似てみました。

■機能一覧.  
＜ユーザーサイド＞.   
・プロジェクト一覧（トップページ）　※ログイン前/後.  
・プロジェクト詳細ページ　※ログイン前/後.  
・プロジェクトの募集・収集金額、サポーター数の集計表示.   
・ユーザー新規登録.   
・ユーザーログイン/ログアウト.   
・ユーザーのサポート履歴一覧.   
・プロジェクトのサポートアイテム購入（っぽいもの）　※ログイン後のみ.   

＜管理サイド＞.   
・Myプロジェクト一覧.   
・プロジェクト登録・更新・削除.   
・プロジェクトへのサポートアイテム登録機能.   

※今回、お気に入りと検索はデザインだけです。 

■頑張った点.   
・DB消しちゃってからのリカバリー.   
・集計表示のところのSQL.   
・プロジェクトにサポートアイテムをぶら下げる構造.   

■工夫した点.   
・ログイン前後での表示変更.   
・削除時のポップアップ.   
・集計表示（SQL：sum(),count()利用、入れ子構造でJOIN）.   

■反省点.   
・どうしてもページが多くなってしまい、管理しづらい。安藤さんは増やさずに済む方法があると言っていたので勉強したい.   
・検索表示の良い表示方法が思い浮かばなかったこと.   
・functionをまとめたかったが、バグを恐れてチャレンジしなかったこと。。反省というか後悔したので、提出後やってみる.   
・サポートアイテムのCRUDをうまく作れなかったこと。あと、複数件一括登録できるようにしたかった.  
・本当はTailwindの練習しようと思っていたのに、やり方だけ覚えた時点で時間なくてBootstrap&普通のCSSに逃げてしまった.   

来週もがんばります！



