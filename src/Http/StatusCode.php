<?php


class StatusCode
{
    /**
     * @description("继续")
     */
    public const Continue = 100;

    /**
     * @description("切换协议")
     */
    public const SwitchingProtocols = 101;

    /**
     * @description("处理")
     */
    public const Processing = 102;

    /**
     * @description("早期提示")
     */
    public const EarlyHints = 103;

    /**
     * @description("好")
     */
    public const Ok = 200;

    /**
     * @description("创建")
     */
    public const Created = 201;

    /**
     * @description("接受")
     */
    public const Accepted = 202;

    /**
     * @description("非权威信息")
     */
    public const NonAuthoritativeInformation = 203;

    /**
     * @description("无内容")
     */
    public const NoContent = 204;

    /**
     * @description("重置内容")
     */
    public const ResetContent = 205;

    /**
     * @description("部分内容")
     */
    public const PartialContent = 206;

    /**
     * @description("多态")
     */
    public const MultiStatus = 207;

    /**
     * @description("已经报道过了")
     */
    public const AlreadyReported = 208;

    /**
     * @description("IM已使用")
     */
    public const IMUsed = 226;

    /**
     * @description("多种选择")
     */
    public const MultipleChoices = 300;

    /**
     * @description("永久移动")
     */
    public const MovedPermanently = 301;

    /**
     * @description("发现")
     */
    public const Found = 302;

    /**
     * @description("见其他")
     */
    public const SeeOther = 303;

    /**
     * @description("没有修改")
     */
    public const NotModified = 304;

    /**
     * @description("使用代理服务器")
     */
    public const UseProxy = 305;

    /**
     * @description("临时重定向")
     */
    public const TemporaryRedirect = 307;

    /**
     * @description("永久重定向")
     */
    public const PermanentRedirect = 308;

    /**
     * @description("错误的请求")
     */
    public const BadRequest = 400;

    /**
     * @description("未认证")
     */
    public const Unauthorized = 401;

    /**
     * @description("预留")
     */
    public const PaymentRequired = 402;

    /**
     * @description("被禁止")
     */
    public const Forbidden = 403;

    /**
     * @description("未找到")
     */
    public const NotFound = 404;

    /**
     * @description("方法不允许")
     */
    public const MethodNotAllowed = 405;

    /**
     * @description("不能接受")
     */
    public const NotAcceptable = 406;

    /**
     * @description("需要代理验证")
     */
    public const ProxyAuthenticationRequired = 407;

    /**
     * @description("请求超时")
     */
    public const RequestTimeout = 408;

    /**
     * @description("冲突")
     */
    public const Conflict = 409;

    /**
     * @description("已删除")
     */
    public const Gone = 410;

    /**
     * @description("长度要求")
     */
    public const LengthRequired = 411;

    /**
     * @description("未满足前提条件")
     */
    public const PreconditionFailed = 412;

    /**
     * @description("有效载荷过大")
     */
    public const PayloadTooLarge = 413;

    /**
     * @description("URI 过长")
     */
    public const URITooLong = 414;

    /**
     * @description("不支持的媒体类型")
     */
    public const UnsupportedMediaType = 415;

    /**
     * @description("请求范围不符合要求")
     */
    public const RangeNotSatisfiable = 416;

    /**
     * @description("未满足期望值")
     */
    public const ExpectationFailed = 417;

    /**
     * @description("彩蛋")
     */
    public const Teapot = 418;

    /**
     * @description("过多的请求")
     */
    public const MisdirectedRequest = 421;

    /**
     * @description("错误的请求")
     */
    public const UnprocessableEntity = 422;

    /**
     * @description("锁定")
     */
    public const Locked = 423;

    /**
     * @description("失败的依赖")
     */
    public const FailedDependency = 424;

    /**
     * @description("过早的")
     */
    public const TooEarly = 425;

    /**
     * @description("需要升级")
     */
    public const UpgradeRequired = 426;

    /**
     * @description("前提要求")
     */
    public const PreconditionRequired = 428;

    /**
     * @description("请求太多")
     */
    public const TooManyRequests = 429;

    /**
     * @description("请求标头字段太大")
     */
    public const RequestHeaderFieldsTooLarge = 431;

    /**
     * @description("法律原因不可用")
     */
    public const UnavailableForLegalReasons = 451;

    /**
     * @description("内部服务器错误")
     */
    public const InternalServerError = 500;

    /**
     * @description("未实现")
     */
    public const NotImplemented = 501;

    /**
     * @description("错误的网关")
     */
    public const BadGateway = 502;

    /**
     * @description("暂停服务")
     */
    public const ServiceUnavailable = 503;

    /**
     * @description("网关超时")
     */
    public const GatewayTimeout = 504;

    /**
     * @description("不支持HTTP版本")
     */
    public const HTTPVersionNotSupported = 505;

    /**
     * @description("内部服务器配置错误")
     */
    public const VariantAlsoNegotiates = 506;

    /**
     * @description("存储空间不足")
     */
    public const InsufficientStorage = 507;

    /**
     * @description("检测到环路")
     */
    public const LoopDetected = 508;

    /**
     * @description("没有扩展")
     */
    public const NotExtended = 510;

    /**
     * @description("需要网络验证")
     */
    public const NetworkAuthenticationRequired = 511;

    /**
     * @description("网络已超时")
     */
    public const NetworkConnectTimeoutError = 599;
}