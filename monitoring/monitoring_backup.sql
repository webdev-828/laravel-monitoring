/*
 Navicat Premium Data Transfer

 Source Server         : Kazna4
 Source Server Type    : PostgreSQL
 Source Server Version : 100002
 Source Host           : 10.200.24.102:5432
 Source Catalog        : monitoring
 Source Schema         : kazna

 Target Server Type    : PostgreSQL
 Target Server Version : 100002
 File Encoding         : 65001

 Date: 12/02/2019 17:12:06
*/


-- ----------------------------
-- Sequence structure for eaeu_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "kazna"."eaeu_id_seq";
CREATE SEQUENCE "kazna"."eaeu_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for expenses_by_function_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "kazna"."expenses_by_function_id_seq";
CREATE SEQUENCE "kazna"."expenses_by_function_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for saldo_main_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "kazna"."saldo_main_id_seq";
CREATE SEQUENCE "kazna"."saldo_main_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for saldo_total_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "kazna"."saldo_total_id_seq";
CREATE SEQUENCE "kazna"."saldo_total_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Sequence structure for top_payers_id_seq
-- ----------------------------
DROP SEQUENCE IF EXISTS "kazna"."top_payers_id_seq";
CREATE SEQUENCE "kazna"."top_payers_id_seq" 
INCREMENT 1
MINVALUE  1
MAXVALUE 2147483647
START 1
CACHE 1;

-- ----------------------------
-- Table structure for eaeu
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."eaeu";
CREATE TABLE "kazna"."eaeu" (
  "id" int4 NOT NULL DEFAULT nextval('"kazna".eaeu_id_seq'::regclass),
  "date_created" date,
  "out_amount_ar" numeric(18,2),
  "in_amount_ar" numeric(18,2),
  "out_amount_by" numeric(18,2),
  "in_amount_by" numeric(18,2),
  "out_amount_kg" numeric(18,2),
  "in_amount_kg" numeric(18,2),
  "out_amount_kz" numeric(18,2),
  "in_amount_kz" numeric(18,2),
  "out_amount_ru" numeric(18,2),
  "in_amount_ru" numeric(18,2),
  "out_amout_total" numeric(18,2),
  "in_amout_total" numeric(18,2)
)
;

-- ----------------------------
-- Records of eaeu
-- ----------------------------
INSERT INTO "kazna"."eaeu" VALUES (1, '2019-02-07', 16824862.26, 9002859.21, 62886370.30, 61939140.72, 26202654.30, 26606026.83, 97294592.68, 65284752.52, 1175878588.83, 1185238015.06, 1379087068.37, 1348070794.34);

-- ----------------------------
-- Table structure for expenses_by_function
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."expenses_by_function";
CREATE TABLE "kazna"."expenses_by_function" (
  "id" int4 NOT NULL DEFAULT nextval('"kazna".expenses_by_function_id_seq'::regclass),
  "date_created" date,
  "amount_701" numeric(18,2),
  "amount_702" numeric(18,2),
  "amount_703" numeric(18,2),
  "amount_704" numeric(18,2),
  "amount_705" numeric(18,2),
  "amount_706" numeric(18,2),
  "amount_707" numeric(18,2),
  "amount_708" numeric(18,2),
  "amount_709" numeric(18,2),
  "amount_710" numeric(18,2)
)
;

-- ----------------------------
-- Records of expenses_by_function
-- ----------------------------
INSERT INTO "kazna"."expenses_by_function" VALUES (1, '2019-02-07', 5821871933.35, 397563499.62, 704021854.41, 269485219.56, 22393731.96, 371534240.37, 777407059.92, 174200456.87, 1757918360.03, 888285673.12);

-- ----------------------------
-- Table structure for gov_debt
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."gov_debt";
CREATE TABLE "kazna"."gov_debt" (
  "id" int8 NOT NULL,
  "date_created" date,
  "total_amount" numeric(18,2),
  "ext_amount" numeric(18,2),
  "int_amount" numeric(18,2)
)
;

-- ----------------------------
-- Table structure for income_total
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."income_total";
CREATE TABLE "kazna"."income_total" (
  "id" int8 NOT NULL,
  "date_created" date,
  "tax_plan" numeric(18,2),
  "tax_fact" numeric(18,2),
  "tax_plan_old" numeric(18,2),
  "tax_fact_old" numeric(18,2),
  "customs_plan" numeric(18,2),
  "customs_plan_old" numeric(18,2),
  "customs_fact" numeric(18,2),
  "customs_fact_old" numeric(18,2),
  "non_tax_plan" numeric(18,2),
  "non_tax_plan_old" numeric(18,2),
  "non_tax_fact" numeric(18,2),
  "non_tax_fact_old" numeric(18,2)
)
;

-- ----------------------------
-- Table structure for prof_def
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."prof_def";
CREATE TABLE "kazna"."prof_def" (
  "id" int8 NOT NULL,
  "date_created" date,
  "amount" numeric(18,2),
  "date" date
)
;

-- ----------------------------
-- Table structure for saldo_main
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."saldo_main";
CREATE TABLE "kazna"."saldo_main" (
  "id" int4 NOT NULL DEFAULT nextval('"kazna".saldo_main_id_seq'::regclass),
  "date_created" date,
  "amount" numeric(18,2)
)
;

-- ----------------------------
-- Records of saldo_main
-- ----------------------------
INSERT INTO "kazna"."saldo_main" VALUES (1, '2018-12-31', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (2, '2019-01-01', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (3, '2019-01-02', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (4, '2019-01-03', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (5, '2019-01-04', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (6, '2019-01-05', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (7, '2019-01-06', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (8, '2019-01-07', 2277932351.51);
INSERT INTO "kazna"."saldo_main" VALUES (9, '2019-01-08', 2426538188.58);
INSERT INTO "kazna"."saldo_main" VALUES (10, '2019-01-09', 2316789878.76);
INSERT INTO "kazna"."saldo_main" VALUES (11, '2019-01-10', 2278294642.97);
INSERT INTO "kazna"."saldo_main" VALUES (12, '2019-01-11', 2261737638.21);
INSERT INTO "kazna"."saldo_main" VALUES (13, '2019-01-12', 2261737638.21);
INSERT INTO "kazna"."saldo_main" VALUES (14, '2019-01-13', 2261737638.21);
INSERT INTO "kazna"."saldo_main" VALUES (15, '2019-01-14', 2651490461.31);
INSERT INTO "kazna"."saldo_main" VALUES (16, '2019-01-15', 2432441220.35);
INSERT INTO "kazna"."saldo_main" VALUES (17, '2019-01-16', 1635900461.61);
INSERT INTO "kazna"."saldo_main" VALUES (18, '2019-01-17', 1848210285.79);
INSERT INTO "kazna"."saldo_main" VALUES (19, '2019-01-18', 2072161928.41);
INSERT INTO "kazna"."saldo_main" VALUES (20, '2019-01-19', 2072161928.41);
INSERT INTO "kazna"."saldo_main" VALUES (21, '2019-01-20', 2072161928.41);
INSERT INTO "kazna"."saldo_main" VALUES (22, '2019-01-21', 2393502178.31);
INSERT INTO "kazna"."saldo_main" VALUES (23, '2019-01-22', 2460162128.96);
INSERT INTO "kazna"."saldo_main" VALUES (24, '2019-01-23', 2678570193.73);
INSERT INTO "kazna"."saldo_main" VALUES (25, '2019-01-24', 2715937675.75);
INSERT INTO "kazna"."saldo_main" VALUES (26, '2019-01-25', 2826056213.36);
INSERT INTO "kazna"."saldo_main" VALUES (27, '2019-01-26', 2826056213.36);
INSERT INTO "kazna"."saldo_main" VALUES (28, '2019-01-27', 2826056213.36);
INSERT INTO "kazna"."saldo_main" VALUES (29, '2019-01-28', 2879367035.58);
INSERT INTO "kazna"."saldo_main" VALUES (30, '2019-01-29', 2968912883.61);
INSERT INTO "kazna"."saldo_main" VALUES (31, '2019-01-30', 2817214816.92);
INSERT INTO "kazna"."saldo_main" VALUES (32, '2019-01-31', 1694151613.24);
INSERT INTO "kazna"."saldo_main" VALUES (33, '2019-02-01', 1204450896.34);
INSERT INTO "kazna"."saldo_main" VALUES (34, '2019-02-02', 1204450896.34);
INSERT INTO "kazna"."saldo_main" VALUES (35, '2019-02-03', 1204450896.34);
INSERT INTO "kazna"."saldo_main" VALUES (36, '2019-02-04', 1028225179.09);
INSERT INTO "kazna"."saldo_main" VALUES (37, '2019-02-05', 719328103.21);
INSERT INTO "kazna"."saldo_main" VALUES (38, '2019-02-06', 175857404.55);
INSERT INTO "kazna"."saldo_main" VALUES (39, '2019-02-07', -7086141.96);

-- ----------------------------
-- Table structure for saldo_total
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."saldo_total";
CREATE TABLE "kazna"."saldo_total" (
  "id" int4 NOT NULL DEFAULT nextval('"kazna".saldo_total_id_seq'::regclass),
  "date_created" date,
  "amount_year" numeric(18,2),
  "amount_month" numeric(18,2),
  "amount_day" numeric(18,2)
)
;

-- ----------------------------
-- Records of saldo_total
-- ----------------------------
INSERT INTO "kazna"."saldo_total" VALUES (1, '2019-02-07', 2277932351.51, 1681637649.34, 1018581647.05);

-- ----------------------------
-- Table structure for top_payers
-- ----------------------------
DROP TABLE IF EXISTS "kazna"."top_payers";
CREATE TABLE "kazna"."top_payers" (
  "id" int4 NOT NULL DEFAULT nextval('"kazna".top_payers_id_seq'::regclass),
  "date_created" date,
  "p_name1" varchar(255) COLLATE "pg_catalog"."default",
  "p_amount1" numeric(18,2),
  "p_name2" varchar(255) COLLATE "pg_catalog"."default",
  "p_amount2" numeric(18,2),
  "p_name3" varchar(255) COLLATE "pg_catalog"."default",
  "p_amount3" numeric(18,2),
  "s_name1" varchar(255) COLLATE "pg_catalog"."default",
  "s_amount1" numeric(18,2),
  "s_name2" varchar(255) COLLATE "pg_catalog"."default",
  "s_amount2" numeric(18,2),
  "s_name3" varchar(255) COLLATE "pg_catalog"."default",
  "s_amount3" numeric(18,2)
)
;

-- ----------------------------
-- Records of top_payers
-- ----------------------------
INSERT INTO "kazna"."top_payers" VALUES (1, '2019-02-07', 'Общество с ограниченной ответственностью "Централ Азия Транзит"', 16740000.00, 'Общество с ограниченной ответственностью "Примус компани"', 11861838.00, 'Общество с ограниченной ответственностью "TOP-НОЧЬ"', 4763995.90, 'АО Народный банк Казахстана Открытое акционерное общество  "Халык Банк Кыргызстан"', 6736000.00, 'Коммунальное предприятие Бишкектеплоэнерго', 950000.00, 'Общество с ограниченной ответственностью Эсентур Строй', 829970.00);

-- ----------------------------
-- Alter sequences owned by
-- ----------------------------
ALTER SEQUENCE "kazna"."eaeu_id_seq"
OWNED BY "kazna"."eaeu"."id";
SELECT setval('"kazna"."eaeu_id_seq"', 2, true);
ALTER SEQUENCE "kazna"."expenses_by_function_id_seq"
OWNED BY "kazna"."expenses_by_function"."id";
SELECT setval('"kazna"."expenses_by_function_id_seq"', 2, true);
ALTER SEQUENCE "kazna"."saldo_main_id_seq"
OWNED BY "kazna"."saldo_main"."id";
SELECT setval('"kazna"."saldo_main_id_seq"', 40, true);
ALTER SEQUENCE "kazna"."saldo_total_id_seq"
OWNED BY "kazna"."saldo_total"."id";
SELECT setval('"kazna"."saldo_total_id_seq"', 2, true);
ALTER SEQUENCE "kazna"."top_payers_id_seq"
OWNED BY "kazna"."top_payers"."id";
SELECT setval('"kazna"."top_payers_id_seq"', 2, true);

-- ----------------------------
-- Primary Key structure for table gov_debt
-- ----------------------------
ALTER TABLE "kazna"."gov_debt" ADD CONSTRAINT "gov_debt_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table prof_def
-- ----------------------------
ALTER TABLE "kazna"."prof_def" ADD CONSTRAINT "prof_def_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table saldo_main
-- ----------------------------
ALTER TABLE "kazna"."saldo_main" ADD CONSTRAINT "saldo_main_pkey" PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table saldo_total
-- ----------------------------
ALTER TABLE "kazna"."saldo_total" ADD CONSTRAINT "saldo_total_pkey" PRIMARY KEY ("id");
