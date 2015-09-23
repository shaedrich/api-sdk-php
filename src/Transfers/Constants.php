<?php
namespace Hitmeister\Component\Api\Transfers;

/**
 * This class was auto generated. Please, do not modify it!
 *
 * @codeCoverageIgnore
 */
class Constants
{
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const TYPE_TRACK = 'Track';
    const TYPE_TINY_TEXT = 'TinyText';
    const TYPE_SHORT_TEXT = 'ShortText';
    const TYPE_SMALL_TEXT = 'SmallText';
    const TYPE_STRING = 'String';
    const TYPE_EAN = 'Ean';
    const TYPE_INT = 'Int';
    const TYPE_BOOL = 'Bool';
    const TYPE_TEXT = 'Text';
    const TYPE_FLOAT = 'Float';
    const TYPE_URL = 'Url';
    const TYPE_FEATURE = 'Feature';
    const TYPE_DATE = 'Date';
    const TYPE_ITEM = 'Item';
    const TYPE_SI_PERCENT = 'Si_Percent';
    const TYPE_SI_CUBIC_METER = 'Si_CubicMeter';
    const TYPE_SI_CUBIC_METER_PER_HOUR = 'Si_CubicMeterPerHour';
    const TYPE_SI_KILOGRAM = 'Si_Kilogram';
    const TYPE_SI_OUNCE = 'Si_Ounce';
    const TYPE_SI_METER = 'Si_Meter';
    const TYPE_SI_SECOND = 'Si_Second';
    const TYPE_SI_LITRE = 'Si_Litre';
    const TYPE_SI_LITRE_PER_HOUR = 'Si_LitrePerHour';
    const TYPE_SI_DEGREE_CELSIUS = 'Si_DegreeCelsius';
    const TYPE_SI_KELVIN = 'Si_Kelvin';
    const TYPE_SI_BAR = 'Si_Bar';
    const TYPE_SI_KILOGRAM_PER_SQUARE_METER = 'Si_KilogramPerSquareMeter';
    const TYPE_SI_SQUARE_METER = 'Si_SquareMeter';
    const TYPE_SI_HERZ = 'Si_Herz';
    const TYPE_SI_BEL = 'Si_Bel';
    const TYPE_SI_INCH = 'Si_Inch';
    const TYPE_SI_PIXEL = 'Si_Pixel';
    const TYPE_SI_BYTE = 'Si_Byte';
    const TYPE_SI_LUMEN = 'Si_Lumen';
    const TYPE_SI_HORSE_POWER = 'Si_HorsePower';
    const TYPE_SI_VOLT = 'Si_Volt';
    const TYPE_SI_WATT = 'Si_Watt';
    const TYPE_SI_AMPERE_HOUR = 'Si_AmpereHour';
    const TYPE_SI_ROUNDS_PER_MINUTE = 'Si_RoundsPerMinute';
    const TYPE_SI_EUROCENT = 'Si_Eurocent';
    const STATUS_OPENED = 'opened';
    const STATUS_BUYER_CLOSED = 'buyer_closed';
    const STATUS_SELLER_CLOSED = 'seller_closed';
    const STATUS_BOTH_CLOSED = 'both_closed';
    const STATUS_CUSTOMER_SERVICE_CLOSED_FINAL = 'customer_service_closed_final';
    const STATUS_CUSTOMER_SERVICE_HAS_TO_ACT = 'customer_service_has_to_act';
    const OPEN_REASON_PRODUCT_NOT_AS_DESCRIBED = 'product_not_as_described';
    const OPEN_REASON_PRODUCT_DEFECT = 'product_defect';
    const OPEN_REASON_PRODUCT_NOT_DELIVERED = 'product_not_delivered';
    const OPEN_REASON_PRODUCT_RETURN = 'product_return';
    const OPEN_REASON_CONTACT_OTHER = 'contact_other';
    const ROLE_SELLER = 'seller';
    const ROLE_BUYER = 'buyer';
    const ROLE_SYSTEM = 'system';
    const ROLE_CUSTOMER_SERVICE = 'customer_service';
    const STATUS_ABORTED = 'ABORTED';
    const STATUS_CHECKED = 'CHECKED';
    const STATUS_CHECKING = 'CHECKING';
    const STATUS_CHECKING_FAILED = 'CHECKING_FAILED';
    const STATUS_DONE = 'DONE';
    const STATUS_DOWNLOADED = 'DOWNLOADED';
    const STATUS_DOWNLOADING = 'DOWNLOADING';
    const STATUS_DOWNLOADING_FAILED = 'DOWNLOADING_FAILED';
    const STATUS_IMPORTED = 'IMPORTED';
    const STATUS_IMPORTING = 'IMPORTING';
    const STATUS_IMPORTING_FAILED = 'IMPORTING_FAILED';
    const STATUS_IMPORTING_STOPPED = 'IMPORTING_STOPPED';
    const STATUS_NEW = 'NEW';
    const STATUS_PREPARED = 'PREPARED';
    const STATUS_PREPARING = 'PREPARING';
    const STATUS_PREPARING_FAILED = 'PREPARING_FAILED';
    const STATUS_PREPROCESSED = 'PREPROCESSED';
    const STATUS_PREPROCESSING = 'PREPROCESSING';
    const STATUS_PREPROCESSING_FAILED = 'PREPROCESSING_FAILED';
    const STATUS_WAITING = 'WAITING';
    const TYPE_DUMP = 'DUMP';
    const TYPE_COMMAND = 'COMMAND';
    const TYPE_PRODUCT_FEED = 'PRODUCT_FEED';
    const TYPE_INVOICE_SELLER = 'invoice_seller';
    const TYPE_CREDIT_SELLER = 'credit_seller';
    const TYPE_INVOICE_BUYER = 'invoice_buyer';
    const TYPE_CREDIT_BUYER = 'credit_buyer';
    const STATUS_NEED_TO_BE_SENT = 'need_to_be_sent';
    const STATUS_SENT = 'sent';
    const STATUS_RECEIVED = 'received';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_SENT_AND_AUTOPAID = 'sent_and_autopaid';
    const STATUS_RETURNED = 'returned';
    const UNIT_CONDITION_100 = 100;
    const UNIT_CONDITION_200 = 200;
    const UNIT_CONDITION_300 = 300;
    const UNIT_CONDITION_400 = 400;
    const UNIT_CONDITION_500 = 500;
    const UNIT_CONDITION_900 = 900;
    const UNIT_CONDITION_NEW = 'new';
    const UNIT_CONDITION_USED_AS_NEW = 'used - as new';
    const UNIT_CONDITION_USED_VERY_GOOD = 'used - very good';
    const UNIT_CONDITION_USED_GOOD = 'used - good';
    const UNIT_CONDITION_USED_ACCEPTABLE = 'used - acceptable';
    const UNIT_CONDITION_DOWNLOAD = 'download';
    const DELIVERY_TIME_A = 'a';
    const DELIVERY_TIME_B = 'b';
    const DELIVERY_TIME_C = 'c';
    const DELIVERY_TIME_D = 'd';
    const DELIVERY_TIME_E = 'e';
    const DELIVERY_TIME_F = 'f';
    const DELIVERY_TIME_G = 'g';
    const DELIVERY_TIME_H = 'h';
    const DELIVERY_TIME_I = 'i';
    const REASON_GENERAL_ADJUSTMENT = 'GeneralAdjustment';
    const REASON_BUYER_CANCELLED = 'BuyerCancelled';
    const REASON_CUSTOMER_EXCHANGE = 'CustomerExchange';
    const REASON_CUSTOMER_RETURN = 'CustomerReturn';
    const REASON_SHIPPING_ADDRESS_UNDELIVERABLE = 'ShippingAddressUndeliverable';
    const REASON_WRONG_CATALOG_DATA = 'WrongCatalogData';
    const REASON_MERCHANDISE_NOT_RECEIVED = 'MerchandiseNotReceived';
    const REASON_NO_INVENTORY = 'NoInventory';
    const REASON_WRONG_PRICE = 'WrongPrice';
    const REASON_UNDELIVERABLE_REGION = 'UndeliverableRegion';
    const CARRIER_CODE_OTHER = 'Other';
    const CARRIER_CODE_COMPUTERUNIVERSE = 'Computeruniverse';
    const CARRIER_CODE_DHL = 'DHL';
    const CARRIER_CODE_DHL_2_MH = 'DHL 2 MH';
    const CARRIER_CODE_DHL_FREIGHT = 'DHL Freight';
    const CARRIER_CODE_DTL = 'dtl';
    const CARRIER_CODE_DPD = 'DPD';
    const CARRIER_CODE_DEUTSCHE_POST = 'Deutsche Post';
    const CARRIER_CODE_DACHSER = 'Dachser';
    const CARRIER_CODE_EMONS = 'Emons';
    const CARRIER_CODE_FEDEX = 'Fedex';
    const CARRIER_CODE_GLS = 'GLS';
    const CARRIER_CODE_GEL = 'GEL';
    const CARRIER_CODE_HERMES = 'Hermes';
    const CARRIER_CODE_HERMES_2_MH = 'Hermes 2 MH';
    const CARRIER_CODE_HELLMANN = 'Hellmann';
    const CARRIER_CODE_ILOXX = 'Iloxx';
    const CARRIER_CODE_KUEHNE_NAGEL = 'Kuehne & Nagel';
    const CARRIER_CODE_RHENUS = 'Rhenus';
    const CARRIER_CODE_SCHENKER = 'Schenker';
    const CARRIER_CODE_SPEDITION_GUETTLER = 'Spedition Guettler';
    const CARRIER_CODE_TNT = 'TNT';
    const CARRIER_CODE_TRANS_O_FLEX = 'trans-o-flex';
    const CARRIER_CODE_UPS = 'UPS';
    const REPORT_STATUS_NEW = 'new';
    const STATUS_PROCESSING = 'processing';
    const STATUS_PROCESSING_FAILED = 'processing_failed';
    const REPORT_STATUS_DONE = 'done';
    const TRACKING_PROVIDER_DHL = 'DHL';
    const STATUS_RETURN_REQUESTED = 'return_requested';
    const STATUS_LABEL_GENERATED = 'label_generated';
    const STATUS_PACKAGE_SENT = 'package_sent';
    const STATUS_PACKAGE_RECEIVED = 'package_received';
    const STATUS_LABEL_DELETED = 'label_deleted';
    const STATUS_NEED_TO_BE_RETURNED = 'need_to_be_returned';
    const STATUS_RETURN_ARRIVED = 'return_arrived';
    const STATUS_RETURN_ACCEPTED = 'return_accepted';
    const STATUS_RETURN_REJECTED = 'return_rejected';
    const STATUS_RETURN_CLOSED = 'return_closed';
    const CONDITION_100 = 100;
    const CONDITION_200 = 200;
    const CONDITION_300 = 300;
    const CONDITION_400 = 400;
    const CONDITION_500 = 500;
    const CONDITION_900 = 900;
    const CONDITION_NEW = 'new';
    const CONDITION_USED_AS_NEW = 'used - as new';
    const CONDITION_USED_VERY_GOOD = 'used - very good';
    const CONDITION_USED_GOOD = 'used - good';
    const CONDITION_USED_ACCEPTABLE = 'used - acceptable';
    const CONDITION_DOWNLOAD = 'download';
    const LOCATION_AD = 'AD';
    const LOCATION_AE = 'AE';
    const LOCATION_AF = 'AF';
    const LOCATION_AG = 'AG';
    const LOCATION_AI = 'AI';
    const LOCATION_AL = 'AL';
    const LOCATION_AM = 'AM';
    const LOCATION_AN = 'AN';
    const LOCATION_AO = 'AO';
    const LOCATION_AQ = 'AQ';
    const LOCATION_AR = 'AR';
    const LOCATION_AS = 'AS';
    const LOCATION_AT = 'AT';
    const LOCATION_AU = 'AU';
    const LOCATION_AW = 'AW';
    const LOCATION_AX = 'AX';
    const LOCATION_AZ = 'AZ';
    const LOCATION_BA = 'BA';
    const LOCATION_BB = 'BB';
    const LOCATION_BD = 'BD';
    const LOCATION_BE = 'BE';
    const LOCATION_BF = 'BF';
    const LOCATION_BG = 'BG';
    const LOCATION_BH = 'BH';
    const LOCATION_BI = 'BI';
    const LOCATION_BJ = 'BJ';
    const LOCATION_BM = 'BM';
    const LOCATION_BN = 'BN';
    const LOCATION_BO = 'BO';
    const LOCATION_BQ = 'BQ';
    const LOCATION_BR = 'BR';
    const LOCATION_BS = 'BS';
    const LOCATION_BT = 'BT';
    const LOCATION_BV = 'BV';
    const LOCATION_BW = 'BW';
    const LOCATION_BY = 'BY';
    const LOCATION_BZ = 'BZ';
    const LOCATION_CA = 'CA';
    const LOCATION_CC = 'CC';
    const LOCATION_CD = 'CD';
    const LOCATION_CF = 'CF';
    const LOCATION_CG = 'CG';
    const LOCATION_CH = 'CH';
    const LOCATION_CI = 'CI';
    const LOCATION_CK = 'CK';
    const LOCATION_CL = 'CL';
    const LOCATION_CM = 'CM';
    const LOCATION_CN = 'CN';
    const LOCATION_CO = 'CO';
    const LOCATION_CR = 'CR';
    const LOCATION_CU = 'CU';
    const LOCATION_CV = 'CV';
    const LOCATION_CW = 'CW';
    const LOCATION_CX = 'CX';
    const LOCATION_CY = 'CY';
    const LOCATION_CZ = 'CZ';
    const LOCATION_DE = 'DE';
    const LOCATION_DJ = 'DJ';
    const LOCATION_DK = 'DK';
    const LOCATION_DM = 'DM';
    const LOCATION_DO = 'DO';
    const LOCATION_DZ = 'DZ';
    const LOCATION_EC = 'EC';
    const LOCATION_EE = 'EE';
    const LOCATION_EG = 'EG';
    const LOCATION_EH = 'EH';
    const LOCATION_ER = 'ER';
    const LOCATION_ES = 'ES';
    const LOCATION_ET = 'ET';
    const LOCATION_FI = 'FI';
    const LOCATION_FJ = 'FJ';
    const LOCATION_FK = 'FK';
    const LOCATION_FM = 'FM';
    const LOCATION_FO = 'FO';
    const LOCATION_FR = 'FR';
    const LOCATION_GA = 'GA';
    const LOCATION_GB = 'GB';
    const LOCATION_GD = 'GD';
    const LOCATION_GE = 'GE';
    const LOCATION_GF = 'GF';
    const LOCATION_GG = 'GG';
    const LOCATION_GH = 'GH';
    const LOCATION_GI = 'GI';
    const LOCATION_GL = 'GL';
    const LOCATION_GM = 'GM';
    const LOCATION_GN = 'GN';
    const LOCATION_GP = 'GP';
    const LOCATION_GQ = 'GQ';
    const LOCATION_GR = 'GR';
    const LOCATION_GS = 'GS';
    const LOCATION_GT = 'GT';
    const LOCATION_GU = 'GU';
    const LOCATION_GW = 'GW';
    const LOCATION_GY = 'GY';
    const LOCATION_HK = 'HK';
    const LOCATION_HM = 'HM';
    const LOCATION_HN = 'HN';
    const LOCATION_HR = 'HR';
    const LOCATION_HT = 'HT';
    const LOCATION_HU = 'HU';
    const LOCATION_ID = 'ID';
    const LOCATION_IE = 'IE';
    const LOCATION_IL = 'IL';
    const LOCATION_IM = 'IM';
    const LOCATION_IN = 'IN';
    const LOCATION_IO = 'IO';
    const LOCATION_IQ = 'IQ';
    const LOCATION_IR = 'IR';
    const LOCATION_IS = 'IS';
    const LOCATION_IT = 'IT';
    const LOCATION_JE = 'JE';
    const LOCATION_JM = 'JM';
    const LOCATION_JO = 'JO';
    const LOCATION_JP = 'JP';
    const LOCATION_KE = 'KE';
    const LOCATION_KG = 'KG';
    const LOCATION_KH = 'KH';
    const LOCATION_KI = 'KI';
    const LOCATION_KM = 'KM';
    const LOCATION_KN = 'KN';
    const LOCATION_KP = 'KP';
    const LOCATION_KR = 'KR';
    const LOCATION_KW = 'KW';
    const LOCATION_KY = 'KY';
    const LOCATION_KZ = 'KZ';
    const LOCATION_LA = 'LA';
    const LOCATION_LB = 'LB';
    const LOCATION_LC = 'LC';
    const LOCATION_LI = 'LI';
    const LOCATION_LK = 'LK';
    const LOCATION_LR = 'LR';
    const LOCATION_LS = 'LS';
    const LOCATION_LT = 'LT';
    const LOCATION_LU = 'LU';
    const LOCATION_LV = 'LV';
    const LOCATION_LY = 'LY';
    const LOCATION_MA = 'MA';
    const LOCATION_MC = 'MC';
    const LOCATION_MD = 'MD';
    const LOCATION_ME = 'ME';
    const LOCATION_MF = 'MF';
    const LOCATION_MG = 'MG';
    const LOCATION_MH = 'MH';
    const LOCATION_MK = 'MK';
    const LOCATION_ML = 'ML';
    const LOCATION_MM = 'MM';
    const LOCATION_MN = 'MN';
    const LOCATION_MO = 'MO';
    const LOCATION_MP = 'MP';
    const LOCATION_MQ = 'MQ';
    const LOCATION_MR = 'MR';
    const LOCATION_MS = 'MS';
    const LOCATION_MT = 'MT';
    const LOCATION_MU = 'MU';
    const LOCATION_MV = 'MV';
    const LOCATION_MW = 'MW';
    const LOCATION_MX = 'MX';
    const LOCATION_MY = 'MY';
    const LOCATION_MZ = 'MZ';
    const LOCATION_NA = 'NA';
    const LOCATION_NC = 'NC';
    const LOCATION_NE = 'NE';
    const LOCATION_NF = 'NF';
    const LOCATION_NG = 'NG';
    const LOCATION_NI = 'NI';
    const LOCATION_NL = 'NL';
    const LOCATION_NO = 'NO';
    const LOCATION_NP = 'NP';
    const LOCATION_NR = 'NR';
    const LOCATION_NU = 'NU';
    const LOCATION_NZ = 'NZ';
    const LOCATION_OM = 'OM';
    const LOCATION_PA = 'PA';
    const LOCATION_PE = 'PE';
    const LOCATION_PF = 'PF';
    const LOCATION_PG = 'PG';
    const LOCATION_PH = 'PH';
    const LOCATION_PK = 'PK';
    const LOCATION_PL = 'PL';
    const LOCATION_PM = 'PM';
    const LOCATION_PN = 'PN';
    const LOCATION_PR = 'PR';
    const LOCATION_PS = 'PS';
    const LOCATION_PT = 'PT';
    const LOCATION_PW = 'PW';
    const LOCATION_PY = 'PY';
    const LOCATION_QA = 'QA';
    const LOCATION_RE = 'RE';
    const LOCATION_RO = 'RO';
    const LOCATION_RS = 'RS';
    const LOCATION_RU = 'RU';
    const LOCATION_RW = 'RW';
    const LOCATION_SA = 'SA';
    const LOCATION_SB = 'SB';
    const LOCATION_SC = 'SC';
    const LOCATION_SD = 'SD';
    const LOCATION_SE = 'SE';
    const LOCATION_SG = 'SG';
    const LOCATION_SH = 'SH';
    const LOCATION_SI = 'SI';
    const LOCATION_SJ = 'SJ';
    const LOCATION_SK = 'SK';
    const LOCATION_SL = 'SL';
    const LOCATION_SM = 'SM';
    const LOCATION_SN = 'SN';
    const LOCATION_SO = 'SO';
    const LOCATION_SR = 'SR';
    const LOCATION_SS = 'SS';
    const LOCATION_ST = 'ST';
    const LOCATION_SU = 'SU';
    const LOCATION_SV = 'SV';
    const LOCATION_SY = 'SY';
    const LOCATION_SZ = 'SZ';
    const LOCATION_TC = 'TC';
    const LOCATION_TD = 'TD';
    const LOCATION_TF = 'TF';
    const LOCATION_TG = 'TG';
    const LOCATION_TH = 'TH';
    const LOCATION_TJ = 'TJ';
    const LOCATION_TK = 'TK';
    const LOCATION_TL = 'TL';
    const LOCATION_TM = 'TM';
    const LOCATION_TN = 'TN';
    const LOCATION_TO = 'TO';
    const LOCATION_TR = 'TR';
    const LOCATION_TT = 'TT';
    const LOCATION_TV = 'TV';
    const LOCATION_TW = 'TW';
    const LOCATION_TZ = 'TZ';
    const LOCATION_UA = 'UA';
    const LOCATION_UG = 'UG';
    const LOCATION_UK = 'UK';
    const LOCATION_UM = 'UM';
    const LOCATION_US = 'US';
    const LOCATION_UY = 'UY';
    const LOCATION_UZ = 'UZ';
    const LOCATION_VA = 'VA';
    const LOCATION_VC = 'VC';
    const LOCATION_VE = 'VE';
    const LOCATION_VG = 'VG';
    const LOCATION_VI = 'VI';
    const LOCATION_VN = 'VN';
    const LOCATION_VU = 'VU';
    const LOCATION_WF = 'WF';
    const LOCATION_WS = 'WS';
    const LOCATION_YE = 'YE';
    const LOCATION_YT = 'YT';
    const LOCATION_ZA = 'ZA';
    const LOCATION_ZM = 'ZM';
    const LOCATION_ZW = 'ZW';
    const EVENT_NAME_ORDER_NEW = 'order_new';
    const EVENT_NAME_ORDER_UNIT_NEW = 'order_unit_new';
}
