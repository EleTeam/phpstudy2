/*
 * @(#)P7Verify.java 1.0 2008-9-23
 * Copyright (c) 2008 Bank Of China Software Center
 * All rights reserved.
 */

package com.bocnet.common.security;

import java.io.ByteArrayOutputStream;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.security.GeneralSecurityException;

/**
 * P7Verify.java
 * pkcs7格式验签名工具
 * 
 * @version 1.0
 * @author SUNY
 * Written Date: 2008-9-26
 */
public class P7Verify {

	/**
	 * @param args
	 * @throws IOException 
	 * @throws GeneralSecurityException 
	 */
	public static void main(String[] args) throws GeneralSecurityException, IOException {
		//参数检查
		if (args.length < 2 || args.length > 5) {
			System.out.println("Usage: \n"
					+ "P7Verify rootcertfile signaturefile [inputfile] [dn]\n");
			System.exit(-1);
		}
		if ("-debug".equals(args[args.length - 1]))
			PKCS7Tool.setDebug(true);
		PKCS7Tool tool = PKCS7Tool.getVerifier(args[0]);
		//默认输入
		InputStream in = System.in;
		FileInputStream signin = null;
		try {
			//读签名
			signin = new FileInputStream(args[1]);
			String signature = new String(readData(signin));
			//如果有输入文件，使用文件代替标准输入
			if (args.length > 2)
				in = new FileInputStream(args[2]);
			//读输入
			byte[] data = readData(in);
			//如果做更严格的验证，可以给出期望的签名证书DN
			String dn = null;
			if (args.length > 3)
				dn = args[3];
			//验签名
			tool.verify(signature, data, dn);
		} finally {
			if (in != null && System.in != in)
				in.close();
			if (signin != null)
				signin.close();
		}
		System.out.println("[VERIFY OK]");
	}

	/**
	 * 读取输入流
	 * @param in 输入流
	 * @return 数据
	 * @throws IOException
	 */
	private static byte[] readData(InputStream in) throws IOException {
		ByteArrayOutputStream bai = new ByteArrayOutputStream();
		byte[] buf = new byte[256];
		int len;
		while ((len = in.read(buf)) > 0)
			bai.write(buf, 0, len);
		return bai.toByteArray();
	}
}
