
#データベースとカラムの表示
#SELECT * FROM データベース名.テーブル名;
SELECT * FROM school.student;
#実行結果
id	name	grade	
1001	山田太郎	1	
1002	児玉雄太	1	
1003	太田隆	2	
1004	佐藤元	2	
1005	林敦子	3	
1006	市村次郎	3	


#データベースとカラムの表示
#SELECT カラム名1, カラム名2 FROM データベース名.テーブル名;
SELECT id, name FROM school.student;
#実行結果
id	name	
1001	山田太郎	
1002	児玉雄太	
1003	太田隆	
1004	佐藤元	
1005	林敦子	
1006	市村次郎	
